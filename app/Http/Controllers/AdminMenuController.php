<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use App\Models\Menu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public $data;

    public function menu(){
        $this->data["menus"] = Menu::getMenu();
        return view('admin.pages.menu.index', $this->data);
    }
    public function edit($id)
    {
        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. " Admin edited menu table" . "\t";

            $userActivity->save();
        }
        $this->data["menu"] = Menu::find($id);
        return view('admin.pages.menu.edit', $this->data);
    }
}
