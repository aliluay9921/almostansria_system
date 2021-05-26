<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Material;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class doctorController extends Controller
{

    public function index($material_id)
    {

        $infolecture = Lecture::where('material_id', $material_id)->with('users', 'materials')->get();
        return view('lecture', compact('infolecture'));
    }
    public function getlectureAdmin($material_id)
    {
        $infolecture = Lecture::where('material_id', $material_id)->with('users', 'materials')->get();
        return view('allLectureAdmin', compact('infolecture'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title'    => 'required',
            'link'     => 'required',
            'desc'     => 'required',
            'file'     => 'required|mimes:pdf,docx,mimes:doc|max:10000',
            'material_id' => 'required'
        ]);
        if ($validation->fails()) {

            return response()->json(['errors' => $validation->errors()->all()]);
        }
        if ($request->has('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('codepdf/', $filename);
        }
        // if ($request->has('image')) {
        //     $file_extension = $request->image->getClientOriginalName();
        //     $file_nameImage = time() . '.' . $file_extension;
        //     $path = 'image';
        //     $request->image->move($path, $file_nameImage);
        // }

        $addlecture = Lecture::create([
            'title' => $request->title,
            'link' => $request->link,
            'desc' => $request->desc,
            'code' => $filename,
            'user_id' => auth()->user()->id,
            'material_id' => $request->material_id
        ]);
        $material = Material::find($request->material_id);
        return response()->json([
            'status' => true,
            'message' => 'تم الاضافة بنجاح',
            'data' =>  $addlecture,
            'material' => $material


        ]);
    }

    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name'    => 'required',
            'link'    => 'required',
            'material_id'    => 'required'
        ]);
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()->all()]);
        }

        Reference::create([
            'name'        => $request->name,
            'link'        => $request->link,
            'material_id' => $request->material_id,
        ]);
        return back()->with(['message' => 'successfuly insert']);
    }
    public function delete(Request $request)
    {
        $get = Lecture::find($request->id);
        if (!$get)
            return redirect()->back();

        $get->delete();
        return response()->json([
            'status' => true,
            'msg' => 'تم الحذف بنجاح',
            'id' =>  $request->id
        ]);
    }
    public function download($code)
    {
        return response()->download('codepdf/' . $code);
    }
}