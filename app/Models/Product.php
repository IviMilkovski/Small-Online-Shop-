<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'description', 'name', 'id_price', 'featured'];

   public function prices(){
return $this->hasMany(Price::class);
   }
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
    public function sizes(){
        return $this->belongsToMany(Size::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function carts(){
        return $this->belongsToMany(Cart::class)->withPivot('count');
    }
//    public function getProducts(){
//       return Product::with('sizes','colors','categories')->get();
//    }
//    public function getSortedAndFiltered(Request $request){
//       $query =self::getProducts();
//       return $query;
//    }
}
