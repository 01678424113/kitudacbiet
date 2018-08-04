<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Name;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $names = Name::all();
        $response = [
            'title' => 'Danh sách tên',
            'names' => $names
        ];
        return view('admin.names.list', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $response = [
            'title' => 'Tạo tên',
            'categories' => $categories
        ];
        return view('admin.names.create', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = new Name();
        $name->name = $request->name;
        $name->category_id = $request->category_id;
        $name->slug = $request->slug;
        $name->description = $request->description;
        $name->content = $request->content_category;
        $name->title = $request->title;
        $name->link = $request->link;
        $name->status = $request->status;
        $name->sort_by = $request->sort_by;
        $name->created_at = time();
        try {
            $name->save();
            return redirect()->back()->with('success', 'Tạo tên mới thành công');
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
        $categories = Category::all();
        $name = Name::where('id', $id)->first();
        if ($name) {
            $response = [
                'title' => 'Sửa tên',
                'name' => $name,
                'categories' => $categories
            ];
            return view('admin.names.edit', $response);
        } else {
            return redirect()->back()->with('error', 'Tên không tồn tại');
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
        $name = Name::find($id);
        $name->name = $request->name;
        $name->category_id = $request->category_id;
        $name->slug = $request->slug;
        $name->description = $request->description;
        $name->content = $request->content_category;
        $name->title = $request->title;
        $name->link = $request->link;
        $name->status = $request->status;
        $name->sort_by = $request->sort_by;
        $name->updated_at = time();
        try {
            $name->save();
            return redirect()->back()->with('success', 'Sửa tên thành công');
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
        $name = Name::find($id);
        if ($name) {
            $name->delete();
            return redirect()->back()->with('success', 'Xóa tên thành công');
        } else {
            return redirect()->back()->with('error', 'Tên không tồn tại');
        }
    }
}
