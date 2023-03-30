<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //create a function that will serve the view page for index
    public function index(){
        return view('services');
    }
}
