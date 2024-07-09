<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Judge extends Model
{
    use HasFactory;
    const A=1, B=2;
    const TAOLU=1, SANDA=2;
    const MODERNO=1, TRADICIONAL=2;
    protected $guarded=[];
    // public function scores(){
    //     return $this->hasMany('App\Models\Score');
    // }
    public function performances(){
        return $this->belongsToMany('App\Models\Perfomance');
    }
    public function rounds(){
        return $this->hasMany('App\Models\Round');
    }
    public function scores(): HasManyThrough
    {
        return $this->hasManyThrough(Score::class, Round::class);
    }


}
