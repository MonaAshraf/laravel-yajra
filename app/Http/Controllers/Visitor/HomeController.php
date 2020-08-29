<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/visitor/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('visitor.auth:visitor');
    }

    /**
     * Show the Visitor dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('visitor.home');
    }

}