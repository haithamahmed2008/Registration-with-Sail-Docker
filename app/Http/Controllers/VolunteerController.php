<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerRegisterRegister;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
   
    public function index()
    {
        return view('volunteers_register');     
    }

    public function register(VolunteerRegisterRegister $request)
    {
        // Write the requist data into table volunteers  table using Volunteer Model

        
        
        $new_registration = Volunteer::create($request->except('_token'));
        
        // Redirect to perv page with success message
        return back()->with('success' , 'Volunteer Created!');
    }
}
