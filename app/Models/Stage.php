<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];
    protected $hidden = ['pivot'];

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user__stages', 'stage_id', 'user_id');
    }
    public function branch()
    {
        return $this->belongsToMany('App\Models\branch', 'branch_stages', 'stage_id', 'branch_id');
    }


    public function materials()
    {
        return $this->hasMany('App\Models\Material', 'stage_id');
    }
}
