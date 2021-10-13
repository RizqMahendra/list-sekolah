<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Accreditation;

class CrudAccreditationController extends Controller
{
    public function show(){
        $data = Accreditation::orderby('id', 'desc')->paginate(10);
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/akreditasi',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add(){
        $data = Accreditation::get();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/add_akreditasi',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add_process(Request $data){
        DB::table('accreditation')->insert([
            'accreditation' => $data->accreditation
        ]);
        return $this->show();
    }
    public function edit($id){
        $data = DB::table('accreditation')->where('id', $id)->first();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/edit_akreditasi',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function edit_process(Request $data){
        $id = $data->id;
        $accreditation = $data->accreditation;
        DB::table('accreditation')->where('id', $id)
                            ->update(['accreditation' => $accreditation]);
        return $this->show();
    }
    public function destroy($id)
    {
        $del = Accreditation::where('id',$id)->delete();
        return $this->show();
    }
}