<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Province;


class CrudProvinceController extends Controller
{
    public function show(){
        $data = Province::orderby('id', 'desc')->paginate(10);
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/provinsi',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add(){
        $data = Province::get();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/add_provinsi',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add_process(Request $data){
        DB::table('province')->insert([
            'nama' => $data->nama
        ]);
        return $this->show();
    }
    public function edit($id){
        $data = DB::table('province')->where('id', $id)->first();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/edit_provinsi',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function edit_process(Request $data){
        DB::table('province')->where('id', $data->id)
                            ->update(['nama' => $data->nama]);
        return $this->show();
    }
    public function destroy($id)
    {
        $del = Province::where('id',$id)->delete();
        return $this->show();
    }
}