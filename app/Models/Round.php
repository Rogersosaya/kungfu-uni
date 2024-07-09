<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;
    const FIRST=1, SECOND=2, THIRD=3;
    protected $guarded=[];
    public function scores(){
        return $this->hasMany("App\Models\Score");
    }
    public function judge(){
        return $this->belongsTo("App\Models\Judge");
    }
}
