<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'link', 'code', 'desc',
        'image', 'material_id', 'user_id'
    ];

    public function materials()
    {
        return $this->belongsTo('App\Models\Material', 'material_id');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}