<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\CategorySchool;

class CrudCategoryController extends Controller
{
    public function show(){
        $data = CategorySchool::orderby('id', 'desc')->paginate(10);
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/kategori',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add(){
        $data = CategorySchool::get();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/add_kategori',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add_process(Request $data){
        DB::table('category_school')->insert([
            'category' => $data->category
        ]);
        return $this->show();
    }
    public function edit($id){
        // $data = DB::table('category_school')->where('id', $id)->first();
        $data = CategorySchool::where('id', $id)->first();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/edit_kategori',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function edit_process(Request $data){
        $Kategori = CategorySchool::find($data->id);
        $Kategori->category=$data->category;
        $result = $Kategori->save();
        // DB::table('category_school')
        //     ->where('id', $data->id)
        //     ->update(['category' => $data->category]);
        return $this->show();
    }
    public function destroy($id)
    {
        $del = CategorySchool::where('id',$id)->delete();
        return $this->show();
    }
}
