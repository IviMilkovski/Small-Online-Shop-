<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserActivity;
use Illuminate\Http\Request;

class AdminUserAcitivtyController extends Controller
{
    public function index(Request $request){

        $activities = UserActivity::with('user');
        if ($request->sort){
            $activities = $activities->orderBy('date', $request->sort);
        }
        $this->data['users'] = User::with('role')->get();
        $this->data['activities'] = $activities->get();
        return view('admin.pages.users.index', $this->data);
    }
}
