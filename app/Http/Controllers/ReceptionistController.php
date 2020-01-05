<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('receptionist');
    }
    public function index(){
        return view('receptionist');
    }
}
