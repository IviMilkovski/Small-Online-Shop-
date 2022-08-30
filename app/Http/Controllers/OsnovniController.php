<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Role;
use App\Models\Cart;
use Illuminate\Http\Request;


class OsnovniController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data["menu"] = Menu::getMenu();
    }
    public function CountCartItems(){
        if(Auth::check()){
            $user_id = Auth::id();
            $active_cart = Cart::where('user_id', '=', $user_id)
                ->where('is_active', '=', 1)->first();

            if($active_cart != null){
                return $active_cart->products()->count();
            }

            return 0;
        }

        return 0;
    }



}
