<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310029;
        $students[] = array("npm"=>212310004, "name"=>"Muhammad Agus Setiawan", "gender"=>"M", "Address"=>"Bogor");
        $students[] = array("npm"=>212310029, "name"=>"Muhamad Ilham Fachririzal", "gender"=>"M", "Address"=>"Jakarta");
        $students[] = array("npm"=>212310044, "name"=>"Hana Yulia Rahmah", "gender"=>"F", "Address"=>"Bandung");
        $students[] = array("npm"=>212310027, "name"=>"MUHAMMAD ASKAH", "gender"=>"M", "Address"=>"Depok");
        $students[] = array("npm"=>212310005, "name"=>"ADJIE SYERAFFI RAHMAT", "gender"=>"M", "Address"=>"Bekasi");
        $data['students'] = $students;
        return view('home.home')->with("data",$data);
    }
}
