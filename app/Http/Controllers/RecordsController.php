<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
    //show profiling
    public function index() {
        return view('index');
    }

    //register page
    public function reg() {
        return view('register');
    }

    //login page
    public function user() {
        return view('login');
    }

     //student_user page
     public function student() {
        return view('student_user');
    }

    //admin_user page
    public function admin() {
        return view('admin_user');
    }

    //guidance_user page
    public function guidance() {
        return view('guidance_user');
    }

    //registrar_user page
    public function registrar() {
        return view('registrar_user');
    }

    //do_user page
    public function do() {
        return view('do_user');
    }
    public function view_student() {
        return view('view_student_info');
    }
}
