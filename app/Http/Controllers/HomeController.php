<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\School;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewSchoolCount()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = School::with('accreditation', 'category_school', 'school_status')->paginate(10);
        $schoolCount = DB::table('school')->get()->count();
        $categoryCount =DB::table('category_school')->get()->count();
        $accreditationCount =DB::table('accreditation')->get()->count();
        $provinceCount =DB::table('province')->get()->count();
        return view('/appkey_admin/main',compact('data','schoolCount','categoryCount','accreditationCount','provinceCount'));
    }
}
