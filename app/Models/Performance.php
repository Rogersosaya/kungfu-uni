<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;
    const TAOLU=1, SANDA=2;
    const MODERNO=1, TRADICIONAL=2;
    protected $guarded=[];
    public function judges(){
        return $this->belongsToMany('App\Models\Judge');
    }
    public function participants(){
        return $this->belongsToMany('App\Models\Participant');
    }
}
