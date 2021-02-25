<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'link', 'image', 'material_id'
    ];

    public function materials()
    {
        return $this->hasMany('App\Models\Material', 'program_id');
    }
}
