<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {  
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/products','ProductController');
    Route::get('/transcation', 'TransactionController@index');
    Route::post('/transcation/addproduct/{id}', 'TransactionController@addProductCart');
    Route::post('/transcation/removeproduct/{id}', 'TransactionController@removeProductCart');
    Route::post('/transcation/clear', 'TransactionController@clear');
    Route::post('/transcation/increasecart/{id}', 'TransactionController@increasecart');
    Route::post('/transcation/decreasecart/{id}', 'TransactionController@decreasecart');
    Route::post('/transcation/bayar','TransactionController@bayar');
    Route::get('/transcation/history','TransactionController@history');
    Route::get('/transcation/laporan/{id}','TransactionController@laporan');
    Route::post('/','welcome@index')->name('welcome');

    Route::get("/view_product/{id}", "ProductController@view")->name("view_product");
    Route::get("/delete_product/{id}", "ProductController@delete")->name("delete_product");
    Route::get("/profile/{id}", "ProfileController@about")->name("profile");
    Route::get("/dashboard", "DashboardController@index")->name("dashboard");

    Route::get("/report", "ReportController@index")->name("report");
    Route::post("/report", "ReportController@index");

    Route::resource('/suppliers','SupplierController');
    Route::get("/view_sup/{id}", "SupplierController@view")->name("view_sup");
    Route::get("/edit_sup/{id}", "SupplierController@edit")->name("edit_sup");
    Route::get("/delete_sup/{id}", "SupplierController@delete")->name("delete_sup");

    Route::get('products/{product}', 'ProductController@index')->name('product.index');

});




