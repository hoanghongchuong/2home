<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Convenient;

class ConvenientController extends Controller
{
    public function index()
    {
    	$data = Convenient::get();
    	return view('admin.convenient.index', compact('data'));
    }

    public function getCreate()
    {    	
    	return view('admin.convenient.create');
    }
    public function postCreate(Request $req)
    {
    	$data = $req->only('name_vi','name_en');
    	Convenient::create($data);
    	return redirect()->route('admin.convenient.index')->with('status','Thêm mới thành công');
    }
    public function getEdit($id)
    {
    	$data = Convenient::findOrFail($id);
    	return view('admin.convenient.edit', compact('data'));
    }
    public function postEdit(Request $req, $id)
    {
    	$data = Convenient::findOrFail($id);
    	$request = $req->only('name_vi','name_en');
    	$data->update($request);
    	return redirect()->back()->with('status','Cập nhật thành công');
    }
}
