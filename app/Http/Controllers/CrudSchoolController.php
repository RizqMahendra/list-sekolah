<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\School;
use App\Models\Accreditation;
use App\Models\CategorySchool;
use App\Models\Status;
use App\Models\Province;
use App\Models\SchoolVerification;
use Illuminate\Support\Facades\DB;


class CrudSchoolController extends Controller
{

    public function show(){

        $data = School::with('accreditation', 'category_school', 'school_status')->paginate(10);
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/main',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));

    }
    public function add(){
        $akreditasi = Accreditation::get();
        $kategori = CategorySchool::get();
        $status = Status::get();
        $daerah_sekolah = Province::get();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/add',compact('akreditasi','kategori','status','daerah_sekolah','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function add_process(Request $data){

        $validatedData = $data->validate(['school_photo' => 'nullable|array']);


        if ($data->school_logo) {
            $school_logo_path = $data->school_logo->store('logo', ['disk' => 'public']);
            $data->school_logo = $school_logo_path;
        }

        if ($data->school_photo) {
            $tmp_image = [];

            foreach ($data->school_photo as $photo) {
                $school_photo_path = $photo->store('images', ['disk' => 'public']);
                array_push($tmp_image, $school_photo_path);
            }

           $validatedData['school_photo'] = $tmp_image;
        }


        $operational_hour = json_encode($data->operational_hour);
        $costs = json_encode($data->costs);
        $socials = json_encode($data->socials);
        $school_photo = json_encode($validatedData['school_photo']);
        $registration_time = json_encode($data->registration_time);
        $filename = $data->school_logo;

        DB::table('school')->insert([
            'name'=>$data->nama_sekolah,
            'description'=>$data->deskripsi_sekolah,
            'accreditation_id'=>$data->akreditasi,
            'school_status_id'=>$data->status,
            'province_id'=>$data->daerah_sekolah,
            'category_school_id'=>$data->kategori,
            'address'=>$data->alamat,
            'school_logo'=>$filename,
            'socials'=>$socials,
            'phone'=>$data->phone,
            'website'=>$data->website,
            'majors'=>$data->majors,
            'school_photo'=>$school_photo,
            'operational_hour'=>$operational_hour,
            'longtitude'=>$data->longtitude,
            'lattitude'=>$data->lattitude,
            'costs'=>$costs,
            'registration_time'=>$registration_time
        ]);


        return $this->show_by_admin();
    }
    public function detail($id)
    {
        $data = School::with('accreditation', 'category_school', 'school_status', 'province')->firstOrFail();
        return view('detail', ['data'=>$data]);
    }
    public function show_by_admin()
    {
        $data = School::with('accreditation', 'category_school', 'school_status', 'province')->paginate(10);
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/main',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));

    }

    public function edit($id)
    {
        $data = School::where('id', $id)->first();
        $akreditasi = Accreditation::get();
        $kategori = CategorySchool::get();
        $status = Status::get();
        $daerah_sekolah = Province::get();
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/edit', compact('data','akreditasi','kategori','status','daerah_sekolah','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
    public function edit_process(Request $data)
    {
            $validatedData = $data->validate(['school_photo' => 'nullable|array']);
            $operational_hour = $data->operational_hour;
            $masterSekolah = School::find($data->id);
            $masterSekolah->name = $data->nama_sekolah;
            $masterSekolah->description = $data->deskripsi_sekolah;
            $masterSekolah->accreditation_id = $data->akreditasi;
            $masterSekolah->school_status_id = $data->status;
            $masterSekolah->category_school_id = $data->kategori;
            $masterSekolah->address = $data->address;
            $masterSekolah->operational_hour = $operational_hour;
            $masterSekolah->costs = $data->costs;
            $masterSekolah->socials = $data->socials;
            $masterSekolah->registration_time = $data->registration_time;

            if ($data->school_logo) {
                $school_logo_path = $data->school_logo->store('logo', ['disk' => 'public']);
                $masterSekolah->school_logo = $school_logo_path;
            }




            if ($data->school_photo) {
                $tmp_image = [];

                foreach ($data->school_photo as $photo) {
                    $school_photo_path = $photo->store('images', ['disk' => 'public']);
                    array_push($tmp_image, $school_photo_path);
                }

                $masterSekolah->school_photo = $tmp_image;
            }


            // if($data->hasfile('image_three')){
            //     $file3 = $data->file('image_three');
            //     $extension3 = $file3->getClientOriginalExtension();
            //     $filename3 = time(). '.' .$extension3;
            //     $file3->move('public/images/img3',$filename3);
            //     $masterSekolah->image_three = $filename3;
            // }
            // else{
            //     $masterSekolah->image_three = '';
            // }

            $masterSekolah->province_id = $data->daerah_sekolah;
            $masterSekolah->phone = $data->no_telp;
            $masterSekolah->website = $data->website;
            $masterSekolah->majors = $data->majors;
            $masterSekolah->lattitude = $data->lattitude;
            $masterSekolah->longtitude = $data->longtitude;

            $result = $masterSekolah->save();

            // dd($masterSekolah);

            if ($result) {
                echo('Sukses!');
                return $this->show_by_admin();
            } else {
                echo('Gagal!');
                return redirect()->back();
            }

        return redirect()->show_by_admin();

        // DB::table('nama_sekolah')->where('id', $id)->update(['nama_sekolah' => $nama_sekolah, 'deskripsi_sekolah' => $deskripsi]);
        // Session::flash('success', 'Data berhasil diedit');
        // return redirect()->action('CrudSchoolController@show_by_admin');
        // return redirect('appkey_admin/main');
    }

    public function destroy($id)
    {
        $del = School::where('id',$id)->delete();
        return $this->show_by_admin();
    }
}
