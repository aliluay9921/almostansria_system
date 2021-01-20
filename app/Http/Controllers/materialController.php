<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class materialController extends Controller
{
    public function store(Request $request)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'title' => 'required|unique:materials,title',
            ],

        );
        if ($validation->fails()) {
            return back()->with(['errors' => 'Material is found']);
        }
        Material::create([
            'title'   => $request->title,
            'desc'     => $request->desc,
            'user_id' => $request->user_id,
            'stage_id' => $request->stage_id,
            'program_id' => $request->program_id
        ]);
        return back()->with(['message' => 'successfuly insert']);
    }
}