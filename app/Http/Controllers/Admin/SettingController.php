<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Exception;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        $response = [
            'title' => 'Danh sách cài đặt',
            'settings' => $settings
        ];
        return view('admin.settings.list', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = [
            'title' => 'Tạo setting'
        ];
        return view('admin.settings.create', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setting = new Setting();
        $setting->name = $request->name;
        $setting->slug = $request->slug;
        $setting->value = $request->value;
        $setting->status = $request->status;
        $setting->created_at = time();
        try {
            $setting->save();
            return redirect()->back()->with('success', 'Tạo setting mới thành công');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Đã có lỗi xảy ra');
        }
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
        $setting = Setting::where('id', $id)->first();
        if ($setting) {
            $response = [
                'title' => 'Sửa setting',
                'setting' => $setting
            ];
            return view('admin.settings.edit', $response);
        } else {
            return redirect()->back()->with('error', 'Setting không tồn tại');
        }
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
        $setting = Setting::find($id);
        $setting->name = $request->name;
        $setting->slug = $request->slug;
        $setting->value = $request->value;
        $setting->status = $request->status;
        $setting->created_at = time();
        try {
            $setting->save();
            return redirect()->back()->with('success', 'Sửa setting thành công');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Đã có lỗi xảy ra');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        if ($setting) {
            $setting->delete();
            return redirect()->back()->with('success', 'Xóa setting thành công');
        } else {
            return redirect()->back()->with('error', 'Setting không tồn tại');
        }
    }
}
