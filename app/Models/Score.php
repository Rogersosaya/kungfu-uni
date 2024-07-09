<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function round(){
        return $this->belongsTo("App\Models\Round");
    }
    public function participant(){
        return $this->belongsTo("App\Models\Participant");
    }
}
