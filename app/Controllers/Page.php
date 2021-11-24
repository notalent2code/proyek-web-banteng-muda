<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Page extends BaseController
{
    public function about(){
        return view('pages/about');
    }
    public function services(){
        return view('pages/services');
    }
    public function membership()
    {
        return view('pages/membership');
    }
    public function contact()
    {
        return view('pages/contact');
    }

}