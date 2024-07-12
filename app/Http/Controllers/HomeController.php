<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
return view('landing.home');
    }

    public function about(){
        return view('landing.about');

    }

    public function contact(){
        return view('landing.contact');

    }
    public function blog(){
        return view('landing.blog');

    }
    public function portfolio(){
        return view('landing.portfolio');

    }

    public function portfolioDetails(){
        return view('landing.portfolio-detail');

    }
    public function team(){
        return view('landing.team');

    }

    public function service(){
        return view('landing.service');

    }
    public function login(){
        return view('landing.login');

    }
    


}
