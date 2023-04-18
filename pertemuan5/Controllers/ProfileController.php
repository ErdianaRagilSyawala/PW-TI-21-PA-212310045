<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileCotroller extends Controller
{
    public function index()
    {
        return "welcome to the main page";
    }
    public function identity()
    {
        return "this the sub page of main page";
    }
    public function family()
    {
        return "this is the family sub page of main page";
    }
}