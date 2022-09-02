<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
        return view('dashboard/dashboard');
    }

    function login(){
        return view('page/login');
    }

    function register_siswa(){
        return view('page/register_siswa');
    }

    function register_mentor(){
        return view('page/register_mentor');
    }
}
