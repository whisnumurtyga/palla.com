<?php

use App\Models\Type;
use App\Models\Order;
use App\Models\Location;
use App\Models\Warehouse;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardWarehouseController;

 

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

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home",
    ]);
});






Route::get('/warehouses', [WarehouseController::class, 'index']);

// Single warehouse
Route::get('warehouses/{warehouse:slug}', [WarehouseController::class, 'show']);



Route::get('/locations', function(){
    return view('locations', [
        'title' => 'Warehouse Locations',
        'locations' => Location::all(),
        "active" => "warehouses",
    ]);
});


// Route::get('/locations/{location:slug}', function(Location $location){
//     return view('warehouses', [
//         'title' => "Location of Warehouse: $location->name",
//         'warehouses' => $location->warehouses->load('location', 'type'),
//         "active" => "warehouses",
//     ]);
// });


// Route::get('/types/{type:slug}', function(Type $type){
//     return view('warehouses', [
//         'title' => "Type of Warehouse: $type->type",
//         'warehouses' => $type->warehouses->load('location', 'type'),
//         "active" => "warehouses",
//     ]);
// });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/order/{id}', [OrderController::class, 'order'])->middleware('auth');

Route::get('/checkout', [OrderController::class, 'checkout'])->middleware('auth');
Route::delete('/checkout/{id}', [OrderController::class, 'delete'])->middleware('auth');
Route::get('/checkout-confirm', [OrderController::class, 'confirm'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/profile', [ProfileController::class, 'update'])->middleware('auth');


Route::get('/transactions', [TransactionController::class, 'index'])->middleware('auth');
Route::get('/transaction/{id}', [TransactionController::class, 'detail'])->middleware('auth');  

Route::get('/dashboard', function() {
    return view('dashboard/index');
})->middleware('auth');  

Route::get('/dashboard/warehouses/checkSlug', [DashboardWarehouseController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/warehouses', DashboardWarehouseController::class)->middleware('auth');   