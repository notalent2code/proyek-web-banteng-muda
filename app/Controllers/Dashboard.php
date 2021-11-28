<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [];
        return view('pages/dashboard', $data);
        // return redirect()->to('/dashboard');
    }

    public function profile(){
        return view('pages/profile');
    }

    // public function admin(){
    //     return view('pages/admin');
    // }
}
