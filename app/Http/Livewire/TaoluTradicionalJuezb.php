<?php

namespace App\Http\Livewire;

use App\Models\Performance;
use App\Models\Round;
use App\Models\Score;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TaoluTradicionalJuezb extends Component
{
    public $puntaje=0;
    public $judge_id="";
    public $performance_id="";
    public $participant_id ="";
    protected $listeners = ['saveScore'];
    public function render()
    {
        $judges = DB::table('judges')
            ->where('category', 1)
            ->where('style', 2)
            ->where('type', 2)
            ->get();
        $performances = Performance::where('category', 1)
            ->where('style', 2)
            ->get();
        return view('livewire.taolu-tradicional-juezb',compact('judges','performances'));
    }
    public function accion(){
        $this->reset(['puntaje']);
    }
    public function saveScore()
    {
        $roundCurrent = Round::Create([
            'value' => ROUND::FIRST,
            'details' => "a",
            'judge_id' => $this->judge_id,
        ]);
        $performance = Performance::where('id', $this->performance_id)->first();
        $participant = $performance->participants()->first();
        Score::Create([
            'value' => $this->puntaje,
            'participant_id' => $participant->id,
            'round_id' => $roundCurrent->id,
        ]);
        $performance->judges()->attach([$this->judge_id]);
        $this->reset(['puntaje', 'judge_id', 'performance_id']);
    }
}
