<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function institutions(){
        return $this->belongsTo('App\Models\Institution');
    }

    public function reports(){
        return $this->hasMany('App\Models\Report');
    }
}
