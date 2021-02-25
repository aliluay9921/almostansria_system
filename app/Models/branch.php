<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function stages()
    {
        return $this->belongsToMany('App\Models\Stage', 'branch_stages', 'branch_id', 'stage_id');
    }
}