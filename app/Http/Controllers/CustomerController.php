<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $data = array('title' => 'Customer');
        return view('customer.index', $data);
    }

    public function about() {
        $data = array('title' => 'About Us');
        return view('customer.about', $data);
    }
}
