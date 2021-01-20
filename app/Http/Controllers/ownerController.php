<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Program;
use App\Models\Stage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ownerController extends Controller
{

    public function index()
    {
        $countusers = User::all();
        $stages = Stage::all();
        $countprograms = Program::all();
        $material = Material::all();
        return view('owner', compact('countusers', 'stages', 'countprograms', 'material'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'fullName' => 'required|alpha',
            'email'    => 'required',
            'password' => 'required|min:6',
            'image'    => 'required|image',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation->errors());
        }

        $file_extension = $request->image->getClientOriginalName();
        $file_name = time() . '.' . $file_extension;
        $path = 'user_image';
        $request->image->move($path, $file_name);

        $adduser = User::create([
            'name' => $request->fullName,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image'    => $file_name

        ]);
        return back()->with(['message' => 'successfuly insert']);
    }
}
