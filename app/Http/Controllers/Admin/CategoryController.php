<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Name;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $response = [
            'title' => 'Danh sách danh mục',
            'categories' => $categories
        ];
        return view('admin.categories.list', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = [
            'title' => 'Tạo danh mục'
        ];
        return view('admin.categories.create', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->content = $request->content_category;
        $category->title = $request->title;
        $category->link = $request->link;
        $category->status = $request->status;
        $category->sort_by = $request->sort_by;
        $category->created_at = time();
        try {
            $category->save();
            return redirect()->back()->with('success', 'Tạo danh mục mới thành công');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Đã có lỗi xảy ra');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        if ($category) {
            $response = [
                'title' => 'Sửa danh mục',
                'category' => $category
            ];
            return view('admin.categories.edit', $response);
        } else {
            return redirect()->back()->with('error', 'Danh mục không tồn tại');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->content = $request->content_category;
        $category->title = $request->title;
        $category->link = $request->link;
        $category->status = $request->status;
        $category->sort_by = $request->sort_by;
        $category->updated_at = time();
        try {
            $category->save();
            return redirect()->back()->with('success', 'Sửa danh mục thành công');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Đã có lỗi xảy ra');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $checkNames = Name::where('category_id', $id)->first();
            if ($checkNames) {
                return redirect()->back()->with('error', 'Bạn không thể xóa do vẫn còn tên thuộc danh mục này');
            } else {
                $category->delete();
                return redirect()->back()->with('success', 'Xóa danh mục thành công');
            }
        } else {
            return redirect()->back()->with('error', 'Danh mục không tồn tại');
        }
    }
}
