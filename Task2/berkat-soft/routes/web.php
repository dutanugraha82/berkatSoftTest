<?php
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [mainController::class,'dashboard']);

Route::get('/login', [formController::class,'login']);

Route::get('/sign-up', [formController::class,'signUp']);

Route::post('/store', [formController::class,'store']);

Route::get('/form-input-product', [formController::class,'inputProduct']);

Route::get('/form-input-customer', [formController::class, 'inputCustomer']);

Route::get('/form-input-order', [formController::class, 'inputOrder']);

Route::get('/customer-list', [mainController::class,'listCustomer']);

Route::get('/order-list',[mainController::class, 'listOrder']);