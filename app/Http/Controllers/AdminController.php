<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }


    //admin post Quustion 

    //admin update Question 

    //Admin Mark Question as Complete

    //admin Put Question on Revision

    //Admin Dispute Question 

    //Admin Make Payments 

}
