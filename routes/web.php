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

Route::get('/','HomeController@index');

Route::get('Categoria/insert', 'ProveedorController@ViewInsert')->name('insertarcatego');

Route::post('Categoria/insert','CategoriaController@InsertCatego')->name('InsertarCategoria');
Route::get('Categoria/update/{id}','CategoriaController@UpdateCatego')->name('UpdateCategoria');
Route::get('Categoria/delete/{id}', 'CategoriaController@DeleteCatego')->name('DeleteCategoria');

Route::get('Categoria/view', 'CategoriaController@ViewCatego')->name('viewcatego');


Route::get('Proveedor/insert', 'ProveedorController@ViewInsert')->name('insertarproveed');

Route::post('Proveedor/insert','ProveedorController@InsertProveed')->name('InsertarProveedor');
Route::get('Proveedor/update/{id}','ProveedorController@UpdateProveed')->name('UpdateProveedor');
Route::get('Proveedor/delete/{id}', 'ProveedorController@DeleteProveed')->name('DeleteProveedor');

Route::get('Proveedor/view', 'ProveedorController@ViewProveed')->name('viewproved');



Route::get('Producto/insert','ProductoController@ViewInsertProduc')->name('ViewInsertProducto');
Route::post('Producto/insert','ProductoController@InsertProduc')->name('InsertarProducto');
Route::get('Producto/update/{id}','ProductoController@UpdateProduc')->name('UpdateProducto');
Route::get('Producto/delete/{id}', 'ProductoController@DeleteProduc')->name('DeleteProducto');

Route::get('Producto/view', 'ProductoController@ViewProduc')->name('viewproduc');



Route::post('Producto/update','ProductoController@UpdateBdProduc')->name('UpdateBdProducto');

Route::post('Proveedor/update','ProveedorController@UpdateBdProveed')->name('UpdateBdProveedor');

Route::post('Categoria/update','CategoriaController@UpdateBdCatego')->name('UpdateBdCategoria');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
