<?php

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
use App\FoodCategory;
use App\Food;
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    $foodcount = Food::count();
    $categorycount = FoodCategory::count();
    return view('dashboard',compact('foodcount','categorycount'));
});
Route::get('menu', function () {
    $categories = FoodCategory::paginate(10);
    
    return view('menu',compact('categories'));
});

Route::get('cart', 'OrderController@cart')->name('cart');
Route::get('checkout', 'OrderController@checkout')->name('checkout');
Route::get('add-to-cart/{id}', 'OrderController@addToCart')->name('addtocart');
Route::patch('update-cart', 'OrderController@updatecart');
Route::delete('remove-from-cart', 'OrderController@remove');
Route::get('/login', 'UserController@loginpage')->name('login');

//Route::middleware('auth')->group(function(){
Route::get('/food/create', 'FoodController@create')->name('food.create');
Route::post('/food/create', 'FoodController@store')->name('food.store');
Route::resource('/food', 'FoodController')->except(["create", "edit"]);

Route::get('/category/create', 'FoodCategoryController@create')->name('cat.create');
Route::post('/category/create', 'FoodCategoryController@store')->name('cat.store');
Route::resource('/category', 'FoodCategoryController')->except(["create", "edit"]);
//});
Route::resource('/order', "OrderController");
Route::get('/user/{user}', 'UserController@getUser');
Route::post('/food/comment', 'FoodController@createComment');
Route::put('/food/comment', 'FoodController@updateComment');
Route::delete('/food/comment/{comment}', 'FoodController@deleteComment');

Route::get('/home', 'HomeController@index')->name('home');
