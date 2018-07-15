<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Home";
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }
    public function contact()
    {
        $title = "Contact Us";
        return view('pages.contact')->with('title', $title);
    }
    public function CustLogin()
    {
        $title = "Login";
        return view('pages.login')->with('title', $title);
    }
    public function CustReg()
    {
        $title = "Register";
        return view('pages.register')->with('title', $title);
    }

    public function cusDash()
    {
        $title = "Home Dashboard";
        return view('pages.homepage')->with('title', $title);
    }
    public function services()
    {
        $title = "Services";
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        )
            ;
        return view('pages.services')->with($data);
    }
}
