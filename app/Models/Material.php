<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'desc', 'stage_id', 'user_id', 'program_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function stages()
    {
        return $this->belongsTo('App\Models\stage', 'stage_id');
    }
}