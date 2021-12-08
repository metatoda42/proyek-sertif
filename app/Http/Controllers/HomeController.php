<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Buat objek controller baru
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Buka dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
