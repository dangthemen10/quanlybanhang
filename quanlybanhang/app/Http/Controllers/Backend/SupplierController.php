<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supplier;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SupplierCreateRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Supplier::paginate(10);
        $users= DB::table('suppliers')->paginate(10); // Hiển thị Phân Trang
        return view('backend.suppliers.index',['users' => $users])
            ->with('listSupplier', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierCreateRequest $request)
    {
        $supplier = new Supplier();
        $supplier->supplier_code = $request->supplier_code;
        $supplier->supplier_name = $request->supplier_name;
        $supplier->description = $request->description;
        $supplier->image = $request->image;
        

        if($request->hasFile('image'))
        {
            $file = $request->image;
            // Lưu tên hình vào column sp_hinh
            $supplier->image = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/uploads', $supplier->image);
        }

        $supplier->save();

        return redirect()->route('backend.supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id); //SELECT * from categories where id='id'
        return view('backend.suppliers.edit')
            ->with('supplier', $supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->supplier_code = $request->supplier_code;
        $supplier->supplier_name = $request->supplier_name;
        $supplier->description = $request->description;
        $supplier->image = $request->image;
        

        if($request->hasFile('image'))
        {
            $file = $request->image;
            // Lưu tên hình vào column sp_hinh
            $supplier->image = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/uploads', $supplier->image);
        }

        $supplier->save();

        return redirect()->route('backend.supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier= Supplier::find($id);
        $supplier->delete();

        return redirect()->route('backend.supplier.index');
    }
}
