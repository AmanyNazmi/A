<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
function contact(){
    return view('contact');
}


function contact_data(Request $request){
    //dd($request->all());
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'cv'=>'required'

    ]);

    $ex = $request->file('cv')->getClientOriginalExtension();
    $cv_name = str_replace(' ', '-', strtolower($request->name));
    $cv_name = $cv_name . '-cv-'.date('d-m-Y').'-'.time().'.'.$ex;
    $request->file('cv')->move(public_path('uploaded_cv'), $cv_name);


}
}
