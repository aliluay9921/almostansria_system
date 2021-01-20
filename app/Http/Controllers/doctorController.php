<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class doctorController extends Controller
{
    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'title'    => 'required',
            'link'     => 'required',
            'file'     => 'required',
            'desc'     => 'required',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation->errors());
        }
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('codepdf', $filename);
        }

        Lecture::create([
            'title' => $request->title,
            'link' => $request->link,
            'desc' => $request->desc,
            'code' => $filename,
            'user_id' => auth()->user()->id,
            'material_id' => $request->material_id
        ]);
        return back()->with(['message' => 'successfuly insert']);
    }
}