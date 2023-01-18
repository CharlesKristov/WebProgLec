<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class HomeController extends Controller
{
    public function index(){
        return view('home.welcome');
    }

    public function viewAboutUs(){
        return view('home.about-us');
    }

    public function viewCp(){
        return view('home.detailpage.cp');
    }

    public function viewHackathon(){
        return view('home.detailpage.hackathon');
    }

    public function viewCtf(){
        return view('home.detailpage.ctf');
    }

    public function viewIdeation(){
        return view('home.detailpage.ideation');
    }

}
