<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolVerificationRequest;
use App\Models\SchoolVerification;
use App\Models\Accreditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SchoolVerificationController extends Controller
{

    protected $repository;

    public function __construct(SchoolVerification $repo)
    {
        $this->repository = $repo;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchoolVerificationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolVerificationRequest $request)
    {

        $validatedData = $request->validated();

        if ($request->school_logo) {
            $school_logo_path = $request->school_logo->store('logo', ['disk' => 'public']);
            $validatedData['school_logo'] = $school_logo_path;
        }

        if ($request->school_photo) {
            $tmp_image = [];

            foreach ($request->school_photo as $photo) {
                $school_photo_path = $photo->store('images', ['disk' => 'public']);
                array_push($tmp_image, $school_photo_path);
            }

            $validatedData['school_photo'] = $tmp_image;
        }

        $this->repository->create($validatedData);
        return redirect()->back()->with('success', 'Success');
    }

    public function show(){
        $data = schoolVerification::with('accreditation')->paginate(10);
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/verifikasi',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }

    // public function detail($school_name){
    //     $data = SchoolVerification::with('accreditation')->where('school_name', $school_name)->first();

    //     // $operational_hour = json_decode($detail->operational_hour);
    //     $operational_hour = $data->operational_hour;
    //     $accreditations = Accreditation::get();

    //     return view('detail',compact('data','accreditations','operational_hour'));
    // }

    public function destroy($id)
    {
        $del = SchoolVerification::where('id',$id)->delete();
        return $this->show();
    }

    public function update(Request $request, $id)
    {
        $schoolVerificationFiles = $this->repository->find($id);

        $schoolVerificationFiles->status = true;

        // dd($schoolVerificationFiles);
        $schoolVerificationFiles->save();

        return redirect()->back();
    }
}
