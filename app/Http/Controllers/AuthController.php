<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\UserActivity;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends OsnovniController
{

    public function index_reg(){
        return view('main.pages.main.register', $this->data);
    }

    public function index_log(){
        return view('main.pages.main.login', $this->data);
    }
    public function register(RegistrationRequest $request){

        try {
            $user = new User();

            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = md5($request->password);
            $user->role_id = 2;
            $user->created_at = date("Y-m-d h:i:s");
            $user->updated_at = date("Y-m-d h:i:s");

            $user->save();
            if(session()->has('user')){
                $userActivity = new UserActivity();
                $userActivity->user_id = session()->get("user")->id;
                $userActivity->ip_address = request()->ip();
                $userActivity->date = date("Y-m-d H:i:s");
                $userActivity->activity = "registered";

                $userActivity->save();
            }


            return  redirect()->route("login.create")->with("success", "Successfully registered. You can login now.");
        } catch(\Exception $ex) {
            \Log::error($ex->getMessage());
            return redirect()->back()->with("error", "An error has occurred, please try again later.");
        }
    }

    public function login(LoginRequest $request) {

        try {
            $user = User::with('role')->where('email', $request->email)->where([
                'email' => $request->email,
                'password' => md5($request->password)
            ])->first();
            if ($user) {
                $request->session()->put('user', $user);
                if(session()->has('user')){
                    $userActivity = new UserActivity();
                    $userActivity->user_id = session()->get("user")->id;
                    $userActivity->ip_address = request()->ip();
                    $userActivity->date = date("Y-m-d H:i:s");
                    $userActivity->activity = "login";

                    $userActivity->save();
                }

                return $user->role_id === 1 ? redirect(route('dashboard'))->with("success", "Admin successfully login.") : redirect(route("home"))->with("success", "User successfully logged in .");
//AdminIva3457!
            } else {
                return redirect()->back()->with("warning", "Wrong username or password.");
            }

        } catch (\Exception $e) {

            return redirect()->back()->with("error", $e->getMessage());
        }

    }

    public function logout(Request $request) {

        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. "User has logged out." . "\t";

            $userActivity->save();
        }
        $request->session()->remove("user");
        return redirect()->route("home")->with("success", "User successfully logged out.");
    }
}
