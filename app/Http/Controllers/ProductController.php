<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Price;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;


class ProductController extends OsnovniController
{

const LIMIT = 6;
    public function index(Request $request){

        $products = Product::with('prices')->with('sizes')->with('colors')->with('categories');


        if ($request->sizes) {
            $products = $products->whereHas('sizes', function ($query) use ($request) {
                return $query->whereIn('size_id', $request->sizes);
            });
        }
            if($request->colors){
                $products = $products->whereHas('colors', function ($query) use ($request){
                    return $query->whereIn('color_id', $request->colors);
                });
            }

        if($request->categories){
            $products = $products->whereHas('categories', function ($query) use ($request){
                return $query->whereIn('category_id', $request->categories);
            });
        }
        $this->data['categories'] = Category::all();
        $this->data['colors'] = Color::all();

        $this->data['sizes'] = Size::all();
        if ($request->sort){
            $products = $products->orderBy('name', $request->sort);
        }
        $this->data['products'] = $products->paginate(self::LIMIT);
        return view('main.pages.products.index', $this->data);
//        $this->data['products'] = Product::getSortedAndFiltered($request);
//
//        return response()->json($this->data);
    }

    public function show(Product $product){

        $price = $product->prices()->get($prices = 'price');
        $product->price = $price;
        $this->data['colors'] = Color::all();
        $this->data['sizes'] = Size::all();
       $this->data["product"] = $product;
        return view('main.pages.products.show', $this->data);
    }
}
