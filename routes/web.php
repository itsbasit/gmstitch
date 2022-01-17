<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeRecordController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CustomerstockController;
use App\Http\Controllers\LedgerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\fetchCustomer;
use App\Http\Controllers\GetInvoiceController;
use App\Http\Controllers\WaistcoatController;
use App\Http\Controllers\PantSizeController;
use App\Http\Controllers\CoatController;
use App\Http\Controllers\ShirtController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function () {

Route::resource('employee', EmployeeController::class);
Route::resource('employeerecord', EmployeeRecordController::class);
Route::get('customer/edit1', [CustomerController::class, 'edit1']);
Route::post('/getCustomer', [fetchCustomer::class,'index']);
Route::post('/getinvoice', [fetchCustomer::class,'getInvoice']);

Route::resource('customer', CustomerController::class);
Route::resource('invoice', InvoiceController::class);
// Route::post('getInvoice', InvoiceController::class, 'getInvoice');
// Route::get('/downloadinvoice/{id}',[DownloadInvoice::class,'index']);
// Route::post('/getinvoice',[GetInvoiceController::class,'index']);
Route::resource('waistcoat', WaistcoatController::class);
Route::resource('pantsize', PantSizeController::class);
Route::resource('coat', CoatController::class);
Route::resource('shirt',ShirtController::class);
Route::resource('stock', StockController::class);
Route::resource('stockcustomer', CustomerstockController::class);
Route::resource('ledger', LedgerController::class);
Route::resource('order', OrderController::class);

});