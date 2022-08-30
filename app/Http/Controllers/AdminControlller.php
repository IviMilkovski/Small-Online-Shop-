<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminControlller extends Controller
{
    protected $data = [];
    public function index(){
        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. " Admin entered dashboard" . "\t";

            $userActivity->save();
        }
            return view('admin.pages.main.dashboard');

    }



}
