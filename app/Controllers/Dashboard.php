<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [];
        return view('pages/dashboard', $data);
    }
}
