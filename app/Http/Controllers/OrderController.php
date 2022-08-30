<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Price;
use App\Models\UserActivity;
use Illuminate\Http\Request;

class OrderController extends OsnovniController
{
    public function order_get(){

        $active_cart = Cart::get_active_cart();

        if($active_cart == null){
            return redirect('/');
        }
        else if(count($active_cart->products) == 0){
            return redirect('/');
        }
        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. "User is on order page." . "\t";

            $userActivity->save();
        }

        $this->data['products'] = $active_cart->products()->get();
        $this->data['prices'] = Price::all();

        $this->data["sum"] = $this->sumTotal($this->data['products'],$this->data['prices']);

        return view('main.pages.main.order', $this->data);
    }
    public function order_post(Request $request){
        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. "User has ordered from the site." . "\t";

            $userActivity->save();
        }
        $this->validate($request, [
            'country' => 'required|max:30|alpha',
            'city' => 'required|max:30|alpha',
            'postal_code' => 'required|numeric',
            'phone_number' => 'required|numeric'
        ]);

        $active_cart = Cart::get_active_cart();

        $order = new Order();
        $order->cart_id = $active_cart->id;
        $order->postal_code = $request->postal_code;
        $order->city = $request->city;
        $order->phone_number = $request->phone_number;
        $order->country = $request->country;
        $order->save();

        $active_cart->is_active = false;
        $active_cart->save();



        return view('main.pages.main.order-success', $this->data);
    }
    private function sumTotal($products,$prices)
    {
        $sum = 0;
        for ($i = 0; $i < count($products); $i++) {
            foreach ($prices as $price) {
                if ($price->product_id == $products[$i]->id)
                    $sum += $price->price * $products[$i]->getOriginal('pivot_count');
            }

        }
        return $sum;
    }
}
