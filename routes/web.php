<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\suitController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\sellcontroller;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

//Start Main Controller
Route::get('deasboard',[MainController::class,'deasboard']);
//End Main Controller

//-------------------------------------------------------------------------
//Start Suit Controller
Route::get('addproduct',[suitController::class,'addProduct'])->name('addproduct');
Route::get('addcategori',[suitController::class,'addcata']);
Route::post('addc',[suitController::class,'addcategoridb']);
Route::get('delete/{id}',[suitController::class,'delete']);
Route::get('update/{id}',[suitController::class,'edit']);
Route::get('manageProduct',[suitController::class,'manageProduct'])->name('manageProduct');
Route::get('addbrand',[suitController::class,'addbrand'])->name('addbrand');
Route::post('addbrands',[suitController::class,'addbrands']);
Route::get('addunit',[suitController::class,'addunit'])->name('addunit');
Route::post('addunits',[suitController::class,'addunits']);
Route::post('addproducts',[suitController::class,'addproducts']);

//End Suit Controller

//----------------------------------------------------------------------
//Start Customer Controller
Route::get('addcustomer',[customerController::class,'addcustomer']);
Route::get('managecustomer',[customerController::class,'managecustomer'])->name('managecustomer');
Route::get('creditcustomer',[customerController::class,'creditcustomer']);
Route::get('paidcustomer',[customerController::class,'paidcustomer']);
Route::post('addcustomers',[customerController::class,'addcustomers']);
//End Customer Controller

//----------------------------------------------------------------------
//Start Sell Controller
Route::get('sell',[sellcontroller::class,'sell']);
Route::get('customars',[sellcontroller::class,'findCustomer'])->name('customars');

Route::get('medicine',[sellcontroller::class,'findMedicine'])->name('medicine');
//End Sell Controller


//----------------------------------------------------------------------
//Start Supplier Controller
Route::get('addsupplier',[SupplierController::class,'addsupplier']);
Route::post('addsuppliers',[SupplierController::class,'addsuppliers']);
Route::get('manageSupplier',[SupplierController::class,'manageSupplier']);
//End Supplier Controller

//---------------------------------------------------------------------------------
//Start Expense Controller
Route::get('expense',[ExpenseController::class, 'Expense'])->name('Expense');
Route::post('expenses',[ExpenseController::class, 'Expenses']);
Route::get('expenseItem',[ExpenseController::class, 'expenseItem'])->name('expenseItem');
Route::post('expenseItems',[ExpenseController::class, 'expenseItems']);
//End Expense Controller

//------------------------------------------------------------------------
//Start Purchase Controller
Route::get('purchase',[PurchaseController::class, 'purchase']);
Route::get('managepurchase',[PurchaseController::class, 'managepurchase']);
Route::get('showMedicineDetails',[PurchaseController::class,'showMedicineDetails'])->name('showMedicineDetails');
//End Purchase Controller

//--------------------------------------------------------------------------------------------------------
//Start User Controller
Route::get('UserRole',[UserController::class, 'UserRole']);
Route::post('AddUserRole',[UserController::class, 'AddUserRole']);
Route::get('user',[UserController::class, 'user']);
Route::post('adduser',[UserController::class, 'adduser']);
Route::get('manageUser',[UserController::class, 'manageUser']);
//End User Controller

//----------------------------------------------------------------------------------------------------
//Start Login Controller
Route::get('/',[LoginController::class,'LoginPage'])->name('loginp');
Route::post('login',[LoginController::class,'login']);
Route::get('logout',[LoginController::class,'logout']);
//End Login Controller
//--------------------------------------------------------------------------------------------------------

//Route::get('update/{id}',[MainController::class,'update']);



