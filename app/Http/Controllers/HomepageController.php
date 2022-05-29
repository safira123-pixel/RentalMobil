<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomepageController;

class HomepageController extends Controller
{
    public function index() {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }
}

