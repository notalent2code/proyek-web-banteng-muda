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
    public function login()
    {
        return view('pages/login');
    }
    public function signup()
    {
        return view('pages/signup');
    }
    // public function tugas02()
    // {
    //     return view('pages/tugas-02');
    // }
    // public function tugas03a()
    // {
    //     return view('pages/tugas-03a');
    // }
    // public function tugas03b()
    // {
    //     return view('pages/tugas-03b');
    // }
    // public function tugas04a()
    // {
    //     return view('pages/tugas-04a');
    // }
    // public function results()
    // {
    //     $data = $this->request->getPost();
    //     return view('pages/results', $data);
    // }
    // public function tugas04b()
    // {
    //     return view('pages/tugas-04b');
    // }
}