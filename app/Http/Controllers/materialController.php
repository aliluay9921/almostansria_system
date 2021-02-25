<?php

namespace App\Http\Controllers;

use App\Models\branch;
use App\Models\Material;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class materialController extends Controller
{

    public function index($stage_id, $branch_id)
    {
        $get = Material::where('stage_id', $stage_id)->with('users', 'lecturs');
        //  $stageInfo = $branch_id != -1 ? [] : Stage::find($stage_id)->branch;
        $stageInfo = Stage::find($stage_id)->branch;

        if ($branch_id != -1) {
            $get = $get->where('branch_id', $branch_id);
        }
        $count = $get->count();
        $get = $get->get();
        return view('allmaterial', compact('get', 'stageInfo', 'stage_id', 'count'));
    }

    public function allMaterialAdmin($stage_id, $branch_id)
    {
        $get = Material::where('stage_id', $stage_id)->with('users', 'program');
        $stageInfo = Stage::find($stage_id)->branch;

        if ($branch_id != -1) {
            $get = $get->where('branch_id', $branch_id);
        }
        $count = $get->count();
        $get = $get->get();
        return view('allMaterialAdmin', compact('get', 'stageInfo', 'stage_id', 'count'));
    }


    public function store(Request $request)
    {

        $validation = Validator::make(
            $request->all(),
            [
                'title' => 'required|unique:materials,title',
                'desc'  => 'required',
                'stage_id' => 'required',
                'user_id' => 'required',
                'program_id' => 'required',

            ],

        );
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()->all()]);
        }
        Material::create([
            'title'   => $request->title,
            'desc'     => $request->desc,
            'user_id' => $request->user_id,
            'stage_id' => $request->stage_id,
            'program_id' => $request->program_id,
            'branch_id' =>  $request->branch_id
        ]);

        return back()->with(['message' => 'successfuly insert']);
    }
}