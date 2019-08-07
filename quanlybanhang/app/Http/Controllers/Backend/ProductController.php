<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
class ProductController extends Controller
{
    public function index(){
        $list = Product::paginate(10); // Phân trang cho dữ liệu
        $users= DB::table('products')->paginate(10); // Hiển thị Phân Trang
        return view('backend.products.index',['users' => $users])
            ->with('listProducts', $list);
    }
}
