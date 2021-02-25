<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class baseController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function get()
    {
        $getstage = Stage::all();
        return view('home', compact('getstage'));
    }
}