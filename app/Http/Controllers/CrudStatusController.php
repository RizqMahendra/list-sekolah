<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Status;

class CrudStatusController extends Controller
{
    public function show(){
        $data = Status::orderby('id', 'desc')->paginate(10);
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/status',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add(){
        $data = Status::get();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/add_status',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add_process(Request $data){
        DB::table('school_status')->insert([
            'status' => $data->status
        ]);
        return $this->show();
    }
    public function edit($id){
        $data = DB::table('school_status')->where('id', $id)->first();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/edit_status',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function edit_process(Request $data){
        DB::table('school_status')->where('id', $data->id)
                            ->update(['status' => $data->status]);
        return $this->show();
    }
    public function destroy($id)
    {
        $del = Status::where('id',$id)->delete();
        return $this->show();
    }
}