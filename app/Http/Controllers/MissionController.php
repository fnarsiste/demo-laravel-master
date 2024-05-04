<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function list() {
        return view('list');
    }

    public function register() {
        return view('register');
    }
}
