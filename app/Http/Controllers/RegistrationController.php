<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class RegistrationController extends Controller
{

    public function register(Request $request){

    	$validatedData = $request->validate([
    			'name' => 'required|string|min:4',
    	        'email' => 'email|required|min:6',
    	        'gender' => 'required',
    	        'degree' => 'required|string|min:4',
    	        'year' => 'required',
    	        'emp_status' => 'required',
    	        'job_search' => 'required',
    	        'password' => 'required|min:8|'
    	    ]);
        $email = $request->email;
        if (User::where('email', $email)->exists()) {
            Alert::error('Error', 'Email is already registered');
            return redirect()->back()->withInput();
        }
        else{
            User::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'civil_status' => $request->civil_status,
                'degree' => $request->degree,
                'year' => $request->year,
                'emp_status' => $request->emp_status,
                'job_type' => $request->job_type,
                'position' => $request->position,
                'part_time' => $request->part_time,
                'tenure' => $request->tenure,
                'salary' => $request->salary,
                'comp_type' => $request->comp_type,
                'private' => $request->private,
                'job_search' => $request->job_search,
                'venture' => $request->venture,
                'knowledge' => $request->knowledge,
                'skills' => $request->skills,
                'curriculum' => $request->curriculum,
                'faculty' => $request->faculty,
                'facilities' => $request->facilities,
                'masters_degree' => $request->masters_degree,
                'masters_year' => $request->masters_year,
                'doctors_degree' => $request->doctors_degree,
                'doctors_year' => $request->doctors_year,
                'seminars' => $request->seminars,
                'certificates' => $request->certificates,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            Alert::success('Success', 'Thank you for registering.');
          return redirect()->route('welcome');
        }
    }
    public function edit($id){
        $alumni = User::find($id);
         return view('alumni.edit')->with('alumni', $alumni);
    }
    public function update(Request $request, $id){
        $alumni = User::find($id);
        $alumni->alumni_status = 'Confirmed';
        $alumni->save();
         return redirect()->back();
    }
}
