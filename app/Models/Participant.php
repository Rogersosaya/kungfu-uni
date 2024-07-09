<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $withCount = ['scores'];
    
    
    const TAOLU=1, SANDA=2;
    const MODERNO=1, TRADICIONAL=2;
    protected $guarded=[];
    public function scores(){
        return $this->hasMany("App\Models\Score");
    }
    public function performances(){
        return $this->belongsToMany('App\Models\Performance');
    }
}
