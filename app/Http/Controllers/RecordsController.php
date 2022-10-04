<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function dashboard(PersonalInfo $PersonalInfo) {
        return view('view-student-info', [
            'PersonalInfo' => $PersonalInfo
        ]);
    }
    public function home() {
        return view('components.home', [
        'personal_infos' =>PersonalInfo::sortable('first_name')->filter(request(['search']))->paginate(4)]);
    } 
    //store students info
    public function store(Request $request) {

        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'sex' => 'required',    //['required', Rule::unique('listings', 'company')],
            'contact_number' => 'required',
            'email' => ['required', Rule::unique('personal_infos','email')],
            'age' => 'required',
            'cell_number' => 'required',
            'date_of_birth' =>'required',
            'place_of_birth' => 'required',
            'nationality' => 'required',
            'permanent_add'=> 'required',
            'religion' => 'required'
        ]);

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('logos','public');
        } 

        PersonalInfo::create($formFields);
        
        return redirect('/home');
    
    }
    
    
}
