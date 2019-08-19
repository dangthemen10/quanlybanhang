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
use App\Category;
use App\Supplier;
use App\Product; //khai báo product mới sử dụng được 
use App\Customer;
use App\Employee;
use App\Order;
use App\Order_Detail;
Route::get('/', function () {
    return view('welcome');
});
// route Hiển thị màn hình hello ExampleController@action
Route::get('/hello', 'ExampleController@hello')->name('example.hello');
Route::get('/gioithieubanthan', 'AboutmeController@gioithieu')->name('example.aboutme');
Route::get('/hoctap/php', 'StudyController@php')->name('example.php');
Route::get('/hoctap/laravel', 'StudyController@laravel')->name('example.laravel');
Route::get('/ngayhomnay', 'TimeController@ngaygio')->name('example.ngaygio');
// Route backend categories
Route::get('/backend/categories', function(){
    $list = Category::all();
    dd($list);
});


Route::get('/backend/supplier', function(){
    $list = Supplier::all();
    //dd($list);
    return view('backend.suppliers.index')
        ->with('listSupplier', $list);
});


//Route chuyển tới view của danh sách sản phẩm
Route::get('/backend/product', function(){
    $list = Product::all();
    //dd($list);
    return view('backend.products.index')
        ->with('listProducts', $list);
});


//Route chuyển tới view của customer
Route::get('/backend/customer', function(){
    $list = Customer::all();
    return view('backend.customers.index')
        ->with('listCustomers', $list);
});

//Route chuyển tới view của employee
Route::get('/backend/employee', function(){
    $list = Employee::all();
    return view('backend.employees.index')
        ->with('listEmployees', $list);
});


//Route chuyển tới view của danh sách các order
Route::get('/backend/order', function(){
    $list = Order::all();
    //dd($list);
    return view('backend.orders.index')
        ->with('listOrders', $list);
});



//Route chuyển tới view của order_details
Route::get('/backend/order_detail', function(){
    $list = Order_Detail::all();
    return view('backend.order_details.index')
        ->with('listOrder_details', $list);
});
//Route Backend
Route::get('/admin/dashboard', 'Backend\PageController@dashboard')->name('backend.pages.dashboard');

Route::get('/admin/customer', 'Backend\CustomerController@index')->name('backend.customer.index');
Route::get('/admin/employee', 'Backend\EmployeeController@index')->name('backend.employee.index');


// Route thêm mới dữ liệu category
Route::get('/admin/category', 'Backend\CategoryController@index')->name('backend.category.index');
Route::get('/admin/category/create', 'Backend\CategoryController@create')->name('backend.category.create'); 
Route::post('/admin/category/store', 'Backend\CategoryController@store')->name('backend.category.store'); 
Route::get('/admin/category/{id}/edit', 'Backend\CategoryController@edit')->name('backend.category.edit');
Route::post('/admin/category/{id}/update', 'Backend\CategoryController@update')->name('backend.category.update');
Route::delete('/admin/category/{id}', 'Backend\CategoryController@destroy')->name('backend.category.destroy');
//Route of supplier  
Route::get('/admin/supplier', 'Backend\SupplierController@index')->name('backend.supplier.index');
Route::get('/admin/supplier/create', 'Backend\SupplierController@create')->name('backend.supplier.create'); 
Route::post('/admin/supplier/store', 'Backend\SupplierController@store')->name('backend.supplier.store'); 
Route::get('/admin/supplier/{id}/edit', 'Backend\SupplierController@edit')->name('backend.supplier.edit');
Route::post('/admin/supplier/{id}/update', 'Backend\SupplierController@update')->name('backend.supplier.update');
Route::delete('/admin/supplier/{id}', 'Backend\SupplierController@destroy')->name('backend.supplier.destroy'); 
//Route of product
Route::get('/admin/product', 'Backend\ProductController@index')->name('backend.product.index');
Route::get('/admin/product/create', 'Backend\ProductController@create')->name('backend.product.create');
Route::post('/admin/product/store', 'Backend\ProductController@store')->name('backend.product.store'); 
Route::get('/admin/product/{id}/edit', 'Backend\ProductController@edit')->name('backend.product.edit');
Route::post('/admin/product/{id}/update', 'Backend\ProductController@update')->name('backend.product.update');
Route::delete('/admin/product/{id}', 'Backend\ProductController@destroy')->name('backend.product.destroy'); 