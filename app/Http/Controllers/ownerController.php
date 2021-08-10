<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\Lecture;
use App\Models\User;
use App\Models\Stage;
use App\Models\Program;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ownerController extends Controller
{

    public function index()
    {
        $countusers = User::all();
        $stages = Stage::all();
        $branch = branch::all();
        $countprograms = Program::all();
        $material = Material::all();
        $lectures = Lecture::all();

        return view('owner', compact('countusers', 'stages', 'countprograms', 'material', 'branch', 'lectures'));
    }

    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'fullName' => 'required',
            'email'    => 'required',
            'password' => 'required|min:6',
            'phone'    => 'required',
            'image'    => 'required|mimes:jpeg,jpg,png',
        ]);
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()->all()]);
        }
        $file_extension = $request->image->getClientOriginalName();
        $file_name = time() . '.' . $file_extension;
        $path = 'user_image';
        $request->image->move($path, $file_name);
        $adduser = User::create([
            'name' => $request->fullName,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone'    => $request->phone,
            'image'    => $file_name,
            'role'      => 2
        ]);
        $adduser->stages()->attach($request->stage_id);
        $stages = $request->stage_id;
        $get = Stage::select('name')->where('id', $stages)->get();


        return response()->json([
            'status' => true,
            'message' => 'تم الاضافة بنجاح',
            'data' =>  $adduser,
            'stage' =>  $get
        ]);
    }

    public function update(Request $request)
    {

        if (isset($request->image)) {
            $file_extension = $request->image->getClientOriginalName();
            $file_name = time() . '.' . $file_extension;
            $path = 'user_image';
            $request->image->move($path, $file_name);
            User::find($request->id)->update([
                'name' => $request->fullName,
                'email' => $request->email,
                'phone'    => $request->phone,
                'image'     => $file_name

            ]);
        } else {
            User::find($request->id)->update([
                'name' => $request->fullName,
                'email' => $request->email,
                'phone'    => $request->phone,
            ]);
        }
        return back()->with(['message' => 'تم التحديث بنجاح ']);
    }


    public function delete(Request $request)
    {

        $get = User::find($request->id);
        if (!$get)
            return redirect()->back();

        Material::where('user_id', $request->id)->update([
            'user_id' => null
        ]);

        $get->delete();

        return response()->json([
            'status' => true,
            'msg' => 'تم الحذف بنجاح',
            'id' =>  $request->id
        ]);
    }
}