<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminControlller;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminUserAcitivtyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/autor', [HomeController::class, 'autor'])->name('autor');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.create');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/shop', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product');
Route::get('/register', [AuthController::class, 'index_reg'])->name('register.create');
Route::get('/login', [AuthController::class, 'index_log'])->name('login.create');
Route::post('/register', [AuthController::class,'register'])->name('register.store');
Route::post('/login',[AuthController::class,'login'])->name('login.store');
Route::get("/logout", [AuthController::class, "logout"])->name("logoutUser");

Route::get('/admin',[AdminControlller::class, 'index'])->name('dashboard');
Route::get('/admin/menu', [AdminMenuController::class,'menu'])->name('admin.menu');
Route::get('/admin/menu/{id}', [AdminMenuController::class, 'edit'])->name('admin.menu.edit');
Route::get('/admin/products',[AdminProductController::class,'index'])->name('admin.products');
Route::delete('/admin/products/delete',[AdminProductController::class, 'product_delete'])->name('product.delete');
Route::get('/admin/products/edit/{id}',[AdminProductController::class,'product_edit_get'])->name('product_edit_get');
Route::post('/admin/products/edit/{id}', [AdminProductController::class,'product_edit_post'])->name('product_edit_post');
Route::get('/admin/products/create', [AdminProductController::class,'product_create_get'])->name('product_create_get');
Route::post('/admin/products/create',[AdminProductController::class,'product_create_post'])->name('product_create_post');
Route::get('/admin/users',[AdminUserAcitivtyController::class,'index'])->name('admin_users');

Route::get('/cart',[CartController::class,'display'])->name('cart_display');
Route::post('/cart/remove',[CartController::class,'remove'])->name('cart_remove');
Route::post('/cart/add', [CartController::class,'add'])->name('cart_add');
Route::post('/cart/update/count', [CartController::class,'update_count'])->name('cart_update_count');
Route::get('/order', [OrderController::class,'order_get'])->name('order_get');
Route::post('/order', [OrderController::class,'order_post'])->name('order_post');
