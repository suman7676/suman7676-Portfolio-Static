<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SideController extends Controller
{
   function HeroPage(){
     return Inertia::render('HeroPage');
   }
    function ContactPage(){
        return Inertia::render('ContactPage');
    }
    function ShowcasePage(){
        return Inertia::render('ShowcasePage');
    }
    function CompanyPage(){
        return Inertia::render('CompanyPage');
    }
    function ProjectPage(){
        return Inertia::render('ProjectPage');
    }
    function ResumePage(){
        return Inertia::render('ResumePage');
    }
    function AboutPage(){
        return Inertia::render('AboutPage');
    }




}
