<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Appointment;
use App\Refer;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index(){
        $user = User::all();
        return $user;
    }
    public function history(){
        $appointment = DB::table('appointments')->where('user_id', '=', auth('api')->user()->id)->get();
        return $appointment;
    }
    public function historyrecep(){
        // $refers = DB::table('refers')->where('user_id', '=', auth('api')->user()->id)->get();
        // return $refers;
        $refers = DB::table('refers')
            ->join('users', 'users.id', '=', 'refers.user_id')
            ->select('users.name','users.email','users.phone', 'refers.*')
            ->where('refers.user_id', '=',  auth('api')->user()->id)
            ->get();
        return $refers;
    }
    public function users(){
        $users = DB::table('users')
            ->join('appointments', 'users.id', '=', 'appointments.user_id')
            ->select('users.name','users.email','users.phone', 'appointments.*')
            ->get();
        // $users = User::all();
        return $users;
    }
    public function referals(Request $request){
        $refer = new Refer();
        $refer->department = $request->department;
        $refer->doctor = $request->doctor;
        $refer->user_id = $request->user('api')->id;
        $refer->save();
    }
    public function store(Request $request)
    {
        // return auth('api')->user();
        $this->validate($request, [
            'department' => 'required|string',
            'message' => 'required|string',
        ]);
        // return $request->user('api')->id;
        $appointment = new Appointment();
        $appointment->department = $request->department;
        $appointment->message = $request->message;
        $appointment->patient_name = $request->user('api')->name;
        $appointment->patient_phone = $request->user('api')->phone;
        $appointment->user_id = $request->user('api')->id;
        $appointment->save();
    }
}
