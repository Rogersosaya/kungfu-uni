<?php

namespace App\Http\Livewire;

use App\Models\Performance;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TaoluPantalla extends Component
{
    public $performance_id = "";
    public $estilo = "";
    // public $participant_id ="";
    public function render()
    {
        $total = 0;
        if ($this->estilo != "") {
            $performances = Performance::where('category', 1)
                ->where('style', $this->estilo)
                ->get();
        } else {
            $performances = Performance::where('category', 1)->get();
        }
        if ($this->performance_id != "") {
            $performance = Performance::find($this->performance_id);
            $participant_current = $performance->participants()->first();

            $promedioPuntajeB = DB::table('performances AS pe')
            ->join('judge_performance AS jp', 'jp.performance_id', '=', 'pe.id')
            ->join('judges AS ju', 'ju.id', '=', 'jp.judge_id')
            ->join('rounds AS ro', 'ro.judge_id', '=', 'ju.id')
            ->join('scores AS sc', 'sc.round_id', '=', 'ro.id')
            ->join('participants AS pa', 'pa.id', '=', 'sc.participant_id')
            ->where('pe.category', 1)
            ->where('pa.id', $participant_current->id)
            ->where('pe.id', $performance->id)
            ->where('ju.type', 2)
            ->avg('sc.value');
            $promedioPuntajeB = round($promedioPuntajeB, 2);

            $promedioPuntajeA = DB::table('performances AS pe')
                ->join('judge_performance AS jp', 'jp.performance_id', '=', 'pe.id')
                ->join('judges AS ju', 'ju.id', '=', 'jp.judge_id')
                ->join('rounds AS ro', 'ro.judge_id', '=', 'ju.id')
                ->join('scores AS sc', 'sc.round_id', '=', 'ro.id')
                ->join('participants AS pa', 'pa.id', '=', 'sc.participant_id')
                ->where('pe.category', 1)
                ->where('pa.id', $participant_current->id)
                ->where('pe.id', $performance->id)
                ->where('ju.type', 1)
                ->avg('sc.value');
            $promedioPuntajeA = round($promedioPuntajeA, 2);
            $total = $promedioPuntajeA + $promedioPuntajeB;
        } else {
            $participant_current = "";
            $promedioPuntajeA = "";
            $promedioPuntajeB = "";
        }
        

        return view('livewire.taolu-pantalla', compact('performances', 'participant_current', 'promedioPuntajeA', 'promedioPuntajeB','total'));
    }
}
