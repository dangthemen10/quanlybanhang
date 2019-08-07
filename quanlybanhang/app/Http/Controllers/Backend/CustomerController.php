<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        $list = Customer::paginate(10);
        $users= DB::table('customers')->paginate(10); // Hiển thị Phân Trang
        return view('backend.customers.index',['users' => $users])
            ->with('listCustomers', $list);
    }
}
