<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    //
    public function addreg()
    {
        return view ('form.add');
    }
    public function add(Request $req)
    {

        $req->validate(
            [
            'name'=>'required|regex:/^[A-Z a-z]+$/',
            'id'=>'required|max:10',
            'cgpa'=>'required|numeric|min:0.0|max:4.0',
            'gender'=>'required',
            'hobby'=>'required',
            'dob'=>'required|date|before:2004-01-01'
            ]
            );
            return 'hii';
    }
}
