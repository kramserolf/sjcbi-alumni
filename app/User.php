<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'maiden_name', 'gender', 
        'civil_status', 'degree', 'year',
        'emp_status', 'job_type', 'position',
        'part_time', 'tenure', 'salary',
        'comp_type', 'private', 'job_search',
        'venture', 'knowledge', 'skills',
        'curriculum', 'faculty', 'facilities',
        'masters_degree', 'masters_year', 'doctors_degree',
        'doctors_year', 'seminars', 'certificates',
        'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
