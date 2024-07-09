<?php

namespace App\Http\Livewire;

use App\Models\Performance;
use App\Models\Round;
use App\Models\Score;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SandaAplicacion extends Component
{
    public $puntajes = [
        1 => [1 => 0, 2 => 0],
        2 => [1 => 0, 2 => 0],
        3 => [1 => 0, 2 => 0],
    ];

    public $judge_id = "";
    public $performance_id = "";
    public $participant_id = "";
    protected $listeners = ['saveScore'];
    public function render()
    {
        $judges = DB::table('judges')
            ->where('category', 2)
            ->where('style', 1)
            ->where('type', 1)
            ->get();
        $performances = Performance::where('category', 2)
            ->where('style', 1)
            ->get();
        if ($this->performance_id != "") {
            $performance_current = Performance::find($this->performance_id);
            $participant1_current = $performance_current->participants()->first();
            $participant2_current = $performance_current->participants()->skip(1)->first();
        } else {
            $performance_current = "";
            $participant1_current = "";
            $participant2_current = "";
        }

        return view('livewire.sanda-aplicacion', compact('judges', 'performances', 'performance_current', 'participant1_current', 'participant2_current'));
    }
    public function aumentar($round, $participant)
    {
        $this->puntajes[$round][$participant]++;
    }
    public function disminuir($round, $participant)
    {
        $this->puntajes[$round][$participant]--;
    }
    public function saveScore($round)
    {
        $roundValue = null;

        switch ($round) {
            case 1:
                $roundValue = ROUND::FIRST;
                break;
            case 2:
                $roundValue = ROUND::SECOND;
                break;
            case 3:
                $roundValue = ROUND::THIRD;
                break;

            default:

                break;
        }
        $performance = Performance::where('id', $this->performance_id)->first();
        $participant1_current = $performance->participants()->first();
        $participant2_current = $performance->participants()->skip(1)->first();
        
        $roundCurrent = Round::Create([
            'value' => $roundValue,
            'details' => "a",
            'judge_id' => $this->judge_id,
        ]);
        
        
        Score::Create([
            'value' => $this->puntajes[$round][1],
            'participant_id' => $participant1_current->id,
            'round_id' => $roundCurrent->id,
        ]);
        Score::Create([
            'value' => $this->puntajes[$round][2],
            'participant_id' => $participant2_current->id,
            'round_id' => $roundCurrent->id,
        ]);
        $performance->judges()->attach([$this->judge_id]);
        $this->reset(['puntajes']);
        if($round == 3){
            $this->reset(['judge_id','performance_id']);
        }
    }
}
