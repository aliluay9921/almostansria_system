<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class programController extends Controller
{
    public function programAdmin()
    {
        $get = Program::with('materials')->get();

        return view('allProgramAdmin', compact('get'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required|unique:programs,title',
            'link'    => 'required',
            'image'    => 'required|mimes:jpeg,jpg,png,gif,jfif',
        ]);
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()->all()]);
        }

        $file_extension = $request->image->getClientOriginalName();
        $file_name = time() . '.' . $file_extension;
        $path = 'image_program';
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
        return view('program', compact('get'));
    }
    public function delete(Request $request)
    {
        Material::where('program_id', $request->id)->update([
            'program_id' => null
        ]);
        $get = Program::find($request->id);

        if (!$get)
            return redirect()->back();

        $get->delete();

        return response()->json([
            'status' => true,
            'msg' => 'تم الحذف بنجاح',
            'id' =>  $request->id
        ]);
    }
    public function update(Request $request)
    {
        if (isset($request->image)) {
            $file_extension = $request->image->getClientOriginalName();
            $file_nameImage = time() . '.' . $file_extension;
            $path = 'image_program';
            $request->image->move($path, $file_nameImage);


            Program::find($request->id)->update([
                'title' => $request->title,
                'image' => $file_nameImage,
                'link'  => $request->link,
            ]);
        } else {
            Program::find($request->id)->update([
                'title' => $request->title,
                'link'    => $request->link,
            ]);
        }
        return back()->with(['message' => 'successfuly update']);
    }
}
