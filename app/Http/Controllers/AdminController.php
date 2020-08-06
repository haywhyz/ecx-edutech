<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\Payment;
use App\Course;
use App\Resource;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = Admin::where('id', Auth::user()->id)->first();
        return view('admin.index')->with('name', $admin->name);
    }

      public function payments()
    {
        $payments = Payment::get();
      return view('admin.payments')->with(['payments' => $payments]);
    }

    public function resources()
    {
        $resources = Resource::get();
      return view('admin.resources')->with(['resources' => $resources]);
    }

    public function courses()
    {
        $courses = Course::get();
        return view('admin.courses')->with(['courses' => $courses]);
    }

    public function curriculums()
    {
        $curriculums = Curriculum::get();
        return view('admin.curriculums')->with(['curriculums' => $curriculums]);
    }

}
