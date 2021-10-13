<?php
namespace App\Http\Controllers;
use App\Models\School;
use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use App\Models\CategorySchool;
use App\Models\Province;
use App\Models\Status;
use App\Models\SchoolVerification;
use Illuminate\Http\Request;

class viewAllSchoolController extends Controller{
    public function index(){
        $schools = School::with('accreditation', 'category_school', 'school_status')->paginate(10);
        $provinces = Province::get();
        $categories = CategorySchool::get();
        $status = Status::get();
        $accreditations = Accreditation::get();
        return view('app', [
            'schools'        => $schools,
            'provinces'      => $provinces,
            'categories'     => $categories,
            'accreditations' => $accreditations,
            'status'         => $status,
        ]);
    }
    public function detail($nama_sekolah){
        $detail = School::with('accreditation', 'category_school', 'school_status', 'province')->where('name', $nama_sekolah)->first();
        $provinces = Province::get();
        $categories = CategorySchool::get();
        $status = Status::get();

        // $operational_hour = json_decode($detail->operational_hour);
        $operational_hour = $detail->operational_hour;
        $accreditations = Accreditation::get();
        // dd($operational_hour);
        return view('detail',compact('detail','provinces','categories','accreditations','status', 'operational_hour'));
        // return view('detail', [
        //     'detail'         =>$detail,
        //     'provinces'      => $provinces,
        //     'categories'     => $categories,
        //     'accreditations' => $accreditations,
        //     'status'         => $status,
        //     $operational_hour
        // ]);
    }
    public function filter(Request $request) {
        $province      = $request->province;
        $schoolName    = $request->school_name;
        $category      = $request->category;
        $accreditation = $request->accreditation;
        $statusRequest = $request->status;

        $provinces = Province::get();
        $categories = CategorySchool::get();
        $accreditations = Accreditation::get();
        $status = Status::get();

        $schools = School::where(function($query) use ($province){
            return $province ? $query->from('province')->where('province_id', $province) : '';
        })->where(function($query) use ($schoolName){
            return $schoolName ? $query->from('school')->where('name', 'like', '%'.$schoolName.'%') : '';
        })->where(function($query) use ($category){
            return $category ? $query->from('category_school')->where('category_school_id', $category) : '';
        })->where(function($query) use ($accreditation){
            return $accreditation ? $query->from('accreditation')->where('accreditation_id', $accreditation) : '';
        })->where(function($query) use ($statusRequest){
            return $statusRequest ? $query->from('school_status')->where('school_status_id', $statusRequest) : '';
        })->with('accreditation', 'category_school', 'school_status', 'province')->paginate(10);

        return view('app', [
            'schools'        => $schools,
            'provinces'      => $provinces,
            'categories'     => $categories,
            'accreditations' => $accreditations,
            'status'         => $status,
        ]);
    }
}
