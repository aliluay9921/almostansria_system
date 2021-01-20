<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class programController extends Controller
{
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required|alpha',
            'link'    => 'required',
            'image'    => 'required|image',
        ]);
        if ($validation->fails()) {
            return back()->with(['errors' => 'Program is found ']);
        }

        $file_extension = $request->image->getClientOriginalName();
        $file_name = time() . '.' . $file_extension;
        $path = '/image_program';
        $request->image->move($path, $file_name);

        Program::create([
            'title' => $request->title,
            'link' => $request->link,
            'image' => $file_name
        ]);
        return back()->with(['message' => 'successfuly insert']);
    }
    public function index()
    {
        $get = Program::all();
        return view('program');
    }
}