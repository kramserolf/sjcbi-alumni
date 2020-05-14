<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'degree' => ['required', 'string', 'min:4', 'max:255']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'maiden_name' => $data['maiden_name'],
            'gender' => $data['gender'],
            'civil_status' => $data['civil_status'],
            'degree' => $data['degree'],
            'year' => $data['year'],
            'emp_status' => $data['emp_status'],
            'job_type' => $data['job_type'],
            'position' => $data['position'],
            'part_time' => $data['part_time'],
            'tenure' => $data['tenure'],
            'salary' => $data['salary'],
            'comp_type' => $data['comp_type'],
            'private' => $data['private'],
            'job_search' => $data['job_search'],
            'venture' => $data['venture'],
            'knowledge' => $data['knowledge'],
            'skills' => $data['skills'],
            'curriculum' => $data['curriculum'],
            'faculty' => $data['faculty'],
            'facilities' => $data['facilities'],
            'masters_degree' => $data['masters_degree'],
            'masters_year' => $data['masters_year'],
            'doctors_degree' => $data['doctors_degree'],
            'doctors_year' => $data['doctors_year'],
            'seminars' => $data['seminars'],
            'certificates' => $data['certificates'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
