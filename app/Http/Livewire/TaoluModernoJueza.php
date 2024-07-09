<?php

namespace App\Http\Livewire;

use App\Models\Judge;
use App\Models\Performance;
use App\Models\Round;
use App\Models\Score;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TaoluModernoJueza extends Component
{
    // public $puntaje=5;
    public $open = false;
    public $puntaje = 5;
    public $judge_id = "";
    public $performance_id = "";
    public $participant_id = "";
    public $password;
    public $authenticated = false;

    protected $listeners = ['saveScore'];
    // public function mount(){
    //     $this->isDisabled = true;
    //     $this->loadPage = true;
    // }
    // public function authenticate()
    // {
        
        
    // }
    public function render()
    {
        if ($this->password === 'tu') {
            $this->authenticated = true;
        }
        // $puntaje = Score::where('participant_id',1)->where('judge_id',1)->where('round_id',1);
        // if($puntaje){

        // }



        $judges = DB::table('judges')
            ->where('category', 1)
            ->where('style', 1)
            ->where('type', 1)
            ->get();
        $performances = Performance::where('category', 1)
            ->where('style', 1)
            ->get();
        
        return view('livewire.taolu-moderno-jueza', compact('judges', 'performances'));
    }

    public function change($value)
    {

        $this->puntaje = $this->puntaje + $value;
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
