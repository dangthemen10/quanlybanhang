<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Product;
use App\Supplier;
use App\Category;
use App\Http\Requests\ProductCreateRequest;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function index(){
        $list = Product::paginate(10); // Phân trang cho dữ liệu
        $users= DB::table('products')->paginate(10); // Hiển thị Phân Trang
        return view('backend.products.index',['users' => $users])
            ->with('listProducts', $list);
    }
    public function create(){
        $listCategories = Category::all();
        $listSuppliers = Supplier::all();
        return view('backend.products.create')
            ->with('listCategories', $listCategories)
            ->with('listSuppliers', $listSuppliers);
    }
    public function store(ProductCreateRequest $request)
    {
        $product = new Product();
        $product->product_code      = $request->product_code;
        $product->product_name      = $request->product_name;
        $product->description       = $request->description;
        //Kiểm tra ảnh có rỗng không
        if(!empty($request->image)){
            $product->image = $request->image;
        }
        
        $product->standard_code     = $request->standard_code;
        $product->list_price        = $request->list_price;
        $product->quantily_per_unit = $request->quantily_per_unit;
        //$product->discontinued      = $request->discontinued;
        if($request->has('discontinued')) {
            $product->discontinued = 1; // Ngưng bán
        } else {
            $product->discontinued = 0; // Còn sử dụng (bán)
        }
        $product->discount          = $request->discount;
        $product->category_id       = $request->category_id;
        $product->supplier_id       = $request->supplier_id;
        if($request->hasFile('image'))
        {
            $file = $request->image;
            // Lưu tên hình vào column image
            $product->image = $file->getClientOriginalName();
            
            // Chép file vào thư mục "uploads"
            $fileSaved = $file->storeAs('public/uploads', $product->image);
        }
        $product->save();
        return redirect()->route('backend.product.index');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $listCategories = Category::all();
        $listSuppliers = Supplier::all();
        return view('backend.products.edit')
            ->with('listCategories', $listCategories)
            ->with('listSuppliers', $listSuppliers)
            ->with('product', $product);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_code      = $request->product_code;
        $product->product_name      = $request->product_name;
        $product->description       = $request->description;
        $product->image             = $request->image;
        $product->standard_code     = $request->standard_code;
        $product->list_price        = $request->list_price;
        $product->quantily_per_unit = $request->quantily_per_unit;
        //$product->discontinued      = $request->discontinued;
        if($request->has('discontinued')) {
            $product->discontinued = 1; // Ngưng bán
        } else {
            $product->discontinued = 0; // Còn sử dụng (bán)
        }
        $product->discount          = $request->discount;
        $product->category_id       = $request->category_id;
        $product->supplier_id       = $request->supplier_id;
        if($request->hasFile('image'))
        {
            //Xóa ảnh cũ để tránh rác
            Storage::delete('public/uploads/' . $product->image);
            $file = $request->image;
            // Lưu tên hình vào column image
            $product->image = $file->getClientOriginalName();
            
            // Chép file vào thư mục "uploads"
            $fileSaved = $file->storeAs('public/uploads', $product->image);
        }
        $product->save();
        return redirect()->route('backend.product.index');
    }
    public function destroy($id)
    {
        $product= Product::find($id);
        $product->delete();

        return redirect()->route('backend.product.index');
    }
}
