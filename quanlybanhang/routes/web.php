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
    dd($list);
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
Route::get('/admin/product', 'Backend\ProductController@index')->name('backend.product.index');
Route::get('/admin/customer', 'Backend\CustomerController@index')->name('backend.customer.index');
Route::get('/admin/employee', 'Backend\EmployeeController@index')->name('backend.employee.index');
Route::get('/admin/category', 'Backend\CategoryController@index')->name('backend.category.index');
// Route thêm mới dữ liệu category
Route::get('/admin/category/create', 'Backend\CategoryController@create')->name('backend.category.create'); 
Route::post('/admin/category/store', 'Backend\CategoryController@store')->name('backend.category.store'); 