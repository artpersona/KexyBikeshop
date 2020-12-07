<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::POST('checkout','InventoryController@checkout');
Route::POST('inventoryUpdate','InventoryController@inventoryUpdate');
Route::resource('inventories', 'InventoryController');
Route::resource('items', 'ItemController');
Route::get('/search','ItemController@search');
Route::get('/', function(){
    return view('welcome');
    });
Route::get('/home', function(){
        return view('home');
        });
        Route::get('/data', function(){
            return view('data');
            });
Auth::routes([

    'register' => true
]);
Route::get("users", [UserController::class, "users"]);


