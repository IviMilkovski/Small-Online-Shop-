<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\UserActivity;
use App\Models\Price;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends OsnovniController
{
    public function display(){

        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. " visited Cart page." . "\t";

            $userActivity->save();
        }

        $active_cart = Cart::get_active_cart();

        if($active_cart == null){
            $this->data['message'] = 'Your cart is empty';
            return view("main.pages.main.cart", $this->data);
        }
        else{
            $this->data['products'] = $active_cart->products()->get();
            $this->data['prices'] = Price::all();
            return view("main.pages.main.cart", $this->data);
        }
    }
    public function add(Request $request){
        $product_id = $request->id;

        $active_cart = Cart::get_active_cart();

        if($active_cart == null){
            $active_cart = new Cart();
            $active_cart->user_id = session()->get("user")->id;
            $active_cart->is_active = 1;
            $active_cart->save();
        }

        $active_cart_id =$active_cart->id;

        $find_cart = Cart::whereHas('products', function ($q) use($product_id, $active_cart_id){
            $q->where('cart_id', '=', $active_cart_id)
                ->where('product_id', '=', $product_id);
        })->first();

        if($find_cart){
            return json_encode([
                'message' => 'Item already added to cart'
            ]);
        }

        $active_cart->products()->attach(array(
            array(
                'product_id' => $product_id,
                'count' => 1),
        ));

        return json_encode([
            'product_id' => $product_id,
            'user_id' => session()->get("user")->id,
            'cart' => $active_cart
        ]);
    }
    public function remove(Request $request){
        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. " Removed item from Cart page." . "\t";

            $userActivity->save();
        }
        $product_id = $request->id;
        $user_id = session()->get("user")->id;

        $active_cart = Cart::get_active_cart();

        $active_cart->products()->detach($product_id);

        return json_encode([
            'message' => $active_cart->products()->count()
        ]);
    }
    public function update_count(Request $request){
        $product_id = $request->product_id;
        $count = $request->count;

        $active_cart = Cart::get_active_cart();

        $active_cart_id =$active_cart->id;

        $active_cart->products()->updateExistingPivot($product_id, [
            'count' => $count
        ]);

        return json_encode([
            'count' =>  $count
        ]);

    }
}
