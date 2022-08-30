<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Price;
use App\Models\Size;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends AdminControlller
{

    public function index(){

            $this->data['products'] = Product::with('prices')->get();
            return view('admin.pages.products.index', $this->data);

    }

    public function product_delete(Request $request){
        Product::where('id','=',$request->id)->delete();
        Price::where('product_id','=',$request->id)->delete();
        return response()->json(['message' => 'success']);
    }
    public function product_edit_get($id){
        $this->data['action'] = 'edit';
        $this->data['sizes'] = Size::all();
        $this->data['categories'] = Category::all();
        $this->data['colors'] = Color::all();
        $this->data['product'] = Product::where('id', '=', $id)->with('prices')->with('categories')->with('sizes')->with('colors')->first();
        return view('admin.pages.products.form', $this->data);
    }
    public function product_edit_post(Request $request, $id){
        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. " Admin has edited a product" . "\t";

            $userActivity->save();
        }

        $old_product = Product::where('id', '=', $id)->first();

        $this->validate($request,[
            'name' => 'required',
            'description' => 'required|max:300',
            'price' => 'required|numeric|min:4|max:1000'
        ]);
        if ($request->image != null){
            $this->validate($request,[
                'image' => 'required|mimes:jpeg,png,jpg|max:1024'
            ]);
           $image = $request->file('image');
           $imageName = $image->getClientOriginalName();
            $image->move(public_path('assets/img'),$imageName);


           $old_product->image = $imageName;

        }
        $old_product->name = $request->name;

        $price = Price::where('product_id', '=', $id)->first();
        $price->price = $request->price;
        $old_product->id_price = $price->id;
        $price->save();
        $old_product->description = $request->description;
        $old_product->colors()->sync($request->color_id);
        $old_product->sizes()->sync($request->size_id);
        $old_product->categories()->sync($request->category_id);

        $old_product->save();
        return redirect()->route('admin.products');

}

public function product_create_get(){
        $this->data['product'] = new Product();
    $this->data['action'] = 'create';
    $this->data['sizes'] = Size::all();
    $this->data['categories'] = Category::all();
    $this->data['colors'] = Color::all();
    $this->data['prices'] = Price::all();
    return view('admin.pages.products.form', $this->data);
}

public function product_create_post(Request $request){

    if (session('user')){
        $userActivity = new UserActivity();
        $userActivity->user_id = session()->get("user")->id;
        $userActivity->ip_address = request()->ip();
        $userActivity->date = date("Y-m-d H:i:s");
        $userActivity->activity = session()->get("user")->username. " Admin added a new product." . "\t";

        $userActivity->save();
    }
    $this->validate($request,[
        'name' => 'required',
        'description' => 'required|max:300',
        'price' => 'required|numeric|min:4|max:1000',
        'image' => 'required|mimes:jpeg,png,jpg|max:1024'
    ]);
    $image = $request->file('image');
    $imageName = $image->getClientOriginalName();
    $image->move(public_path('assets/img'),$imageName);

    $old_prod = \DB::table('products');
    $product = new Product();

    $oldId = 20;
    $product->id = $oldId + 1;
    $product->name = $request->name;
    $product->description = $request->description;
    $product->image = $imageName;
    $price = new Price();
    $price->product_id = $product->id;
    $price->price = $request->price;
    $price->save();
    $product->id_price = $price->id;
    $product->featured = 0;

    $product->save();

    $product->colors()->attach($request->color_id);
    $product->sizes()->attach($request->size_id);
    $product->categories()->attach($request->category_id);

    return redirect()->route('admin.products');

}
}
