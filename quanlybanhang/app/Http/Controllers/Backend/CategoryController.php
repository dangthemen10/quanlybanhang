<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoryCreateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Category::paginate(10);
        $users= DB::table('categories')->paginate(10); // Hiển thị Phân Trang
        return view('backend.categories.index',['users' => $users])
            ->with('listCategory', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $category = new Category();
        $category->category_code = $request->category_code;
        $category->category_name = $request->category_name;
        $category->description = $request->description;
        $category->image = $request->image;
        

        if($request->hasFile('image'))
        {
            $file = $request->image;
            // Lưu tên hình vào column sp_hinh
            $category->image = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/uploads', $category->image);
        }

        $category->save();

        return redirect()->route('backend.category.index');
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
        $category = Category::find($id); //SELECT * from categories where id='id'
        return view('backend.categories.edit')
            ->with('category', $category);
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
        $category = Category::find($id);
        $category->category_code = $request->category_code;
        $category->category_name = $request->category_name;
        $category->description = $request->description;
        $category->image = $request->image;
        

        if($request->hasFile('image'))
        {
            $file = $request->image;
            // Lưu tên hình vào column sp_hinh
            $category->image = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/uploads', $category->image);
        }

        $category->save();

        return redirect()->route('backend.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);
        $category->delete();

        return redirect()->route('backend.category.index');
    }
}
