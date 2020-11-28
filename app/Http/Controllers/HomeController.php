<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    
    public function homes()
    {
        // print_r('expression');
        return view('home.home');
    }

    public function about()
    {
        // print_r('expression');
        return view('home.about'); 
    }

    public function careers()
    {
        // print_r('expression');
        return view('home.Careers');
    }

    public function termsconditions()
    {
        // print_r('expression');
        return view('home.termsconditions');
    }

    public function team()
    {
        // print_r('expression');
        return view('home.team');
    }
    public function ride()
    {
        // print_r('expression');
        return view('home.ride');
    }

    public function refund()
    {
        // print_r('expression');
        return view('home.refund');
    }
    public function privacy()
    {
        // print_r('expression');
        return view('home.privacy');
    }
    public function partner()
    {
        // print_r('expression');
        return view('home.partner');
    }
    public function login()
    {
        // print_r('expression');
        return view('home.login');
    }
    public function item()
    {
        // print_r('expression');
        return view('home.item');

    }
    public function help()
    {
        // print_r('expression');
        return view('home.help');
    }
    
}