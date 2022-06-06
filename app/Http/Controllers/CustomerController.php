<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $data = array('title' => 'customer');
        return view('customer.index', $data);
    }
}
