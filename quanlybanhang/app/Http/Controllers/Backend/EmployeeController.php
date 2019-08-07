<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; // Thêm vào khi muốn sử dụng database
use App\Employee; // thêm database Employee vào khi sử dụng

class EmployeeController extends Controller
{
    public function index(){
        $list = Employee::paginate(10);
        $users= DB::table('employees')->paginate(10); // Hiển thị Phân Trang
        return view('backend.employees.index',['users' => $users])
            ->with('listEmployees', $list);
    }
}
