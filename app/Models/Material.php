<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'desc', 'stage_id', 'user_id', 'program_id', 'branch_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function stages()
    {
        return $this->belongsTo('App\Models\stage', 'stage_id');
    }

    public function branchs()
    {
        return $this->belongsTo('App\Models\branch', 'branch_id');
    }

    public function program()
    {
        return $this->belongsTo('App\Models\program', 'program_id');
    }

    public function lecturs()
    {
        return $this->hasMany('App\Models\Lecture', 'material_id');
    }

    public function refrence()
    {
        return $this->hasOne('App\Models\Reference', 'material_id');
    }
}