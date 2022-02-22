<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    //
    public function add(Request $req)
    {

        $req->validate(
            [
            'Name'=>'requird|regex:/^[A-Z a-z]+$/',
            'Id'=>'required',
            'Cgpa'=>'required',
            'Gender'=>'required',
            'Hobbies'=>'required',
            'Date of birth'=>'required'
            ]
            );
    }
}
