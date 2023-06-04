<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\TerritoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerDemographicController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerCustomerDemoController;
use App\Http\Controllers\EmployeeTerritoryController;
use App\Http\Controllers\AdminUserController;
use App\Models\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::resource('region', RegionController::class);
Route::resource('territory', TerritoryController::class);
Route::resource('products', ProductController::class);
Route::resource('shipper', ShipperController::class);
Route::resource('order', OrderController::class);
Route::resource('customerdemographic', CustomerDemographicController::class);
Route::resource('customers', CustomerController::class);
Route::resource('category', CategoryController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('orderDetails', OrderDetailController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('customer_customer_demos', CustomerCustomerDemoController::class);
Route::resource('employee_territories', EmployeeTerritoryController::class);
Route::resource('admin', AdminUserController::class)->middleware('auth');
Route::post('addrole/{id}', [AdminUserController::class, 'addrole'])->name('addrole')->middleware('auth');
Route::post('destroyrole/{id}', [AdminUserController::class, 'destroyrole'])->name('destroyrole')->middleware('auth');
Route::get('deleterole/{id}', [AdminUserController::class, 'deleterole'])->name('deleterole')->middleware('auth');
Route::get('users/createUser', [AdminUserController::class, 'createuser'])->name('users.createuser')->middleware('auth');
Route::post('users/storeUser', [AdminUserController::class, 'storeuser'])->name('admin.storeuser')->middleware('auth');
Route::get('users/editUser/{id}', [AdminUserController::class, 'edituser'])->name('admin.edituser')->middleware('auth');
Route::post('users/updateUser/{id}', [AdminUserController::class, 'updateuser'])->name('admin.updateuser')->middleware('auth');
Route::delete('users/{id}', [AdminUserController::class, 'deleteuser'])->name('admin.deleteuser')->middleware('auth');
Route::get('/action', [CityController::class, 'action'])->name('action')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
