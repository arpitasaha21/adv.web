<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cv;

class cvController extends Controller
{
    //
    public function profile(){
        $cv= array(
            "Name"=>"Arpita Saha",
             "Id"=>"19-41363-3"
    );
        $profile[]=(object) $cv;
        //return var_dump($cv);

        return view('cv.profile')->with('profile',$profile);
        
    }

    public function education(){
        $edu= array(
            "Degree"=>"SSC",
            "Institution"=>"National Ideal School",
            "Result"=>"4.96",
            "Year"=>"2016"
            
        );
        $education[]=(object)$edu;
        //$education[]=$edu;

        $ed= array(
            "Degree"=>"HSC",
            "Institution"=>"Central Womens' College",
            "Result"=>"4.17",
            "Year"=>"2018"
            
        );
        $education[]=(object)$ed;
        
        $e= array(
            "Degree"=>"BSc in CSE",
            "Institution"=>"AIUB",
            "Result"=>"3.78",
            "Year"=>"2019 to present"
            
        );
        $education[]=(object)$e;
        return view ('cv.education')->with('education',$education);
        
    }

    public function project()
    {
        $pro= array(
            "C"=>"Create PhoneBook",
            "JAVA"=>"Bank System",
            "Database"=>"Software company",
            "Csharp"=>"Online book borrow and return system",
            "SoftwareEngineering"=>"Investor Find"

        );
        $project[]=(object)$pro;
        return view('cv.project')->with('project',$project);
    }

    public function contact()
    {
        $con= array(
            "PhoneNo"=>"01835490896",
            "Email"=>"1999.arpitasaha@gmail.com",
            "Address"=>"70,swamibagh",
            

        );
        $contact[]=(object)$con;
        return view('cv.contact')->with('contact',$contact);
    }

    public function refrence()
    {
        $ref= array(
            "Name"=>" Ariful Islam",
            "prof"=>"Asistant Professor,Dhaka University",
            "PhoneNo"=>"01714079892",
            

        );
        $refrence[]=(object)$ref;
        

        $re= array(
            "Name"=>" Irin Haque",
            "prof"=>"Senior Officer, Janata Bank",
            "PhoneNo"=>"015214079892",
            

        );
        $refrence[]=(object)$re;
        return view('cv.refrence')->with('refrence',$refrence);
    }
    

}
