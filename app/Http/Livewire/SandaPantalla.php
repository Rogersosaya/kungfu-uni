<?php

namespace App\Http\Livewire;

use App\Models\Performance;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SandaPantalla extends Component
{
    public $performance_id = "";
    public $round_value = "";
    public $total;
    public function render()
    {
        $performances = Performance::where('category', 2)->get();
        $pa1_ju1_ro1 = "";
        $pa2_ju1_ro1 = "";
        $judges_current = [];
        $averagespa1 = [];
        $averagespa2 = [];
        $averages = [];
        $jurados = [];
        $performance="";
        if ($this->performance_id != "") {
            $performance = Performance::find($this->performance_id);
            $participant1_current = $performance->participants()->first();
            $participant2_current = $performance->participants()->skip(1)->first();
            $judges_current = $performance->judges()->distinct()->get();
            $count_judges = $performance->judges()->distinct()->count();

            if ($this->round_value != "") {
                $index = 0;
                foreach ($judges_current as $judge) {
                    $index++;

                    $querypa1 = DB::table('performances AS pe')
                        ->join('judge_performance AS jp', 'jp.performance_id', '=', 'pe.id')
                        ->join('judges AS ju', 'ju.id', '=', 'jp.judge_id')
                        ->join('rounds AS ro', 'ro.judge_id', '=', 'ju.id')
                        ->join('scores AS sc', 'sc.round_id', '=', 'ro.id')
                        ->join('participants AS pa', 'pa.id', '=', 'sc.participant_id')
                        ->where('pa.id', '=', $participant1_current->id)
                        ->where('pe.id', '=', $performance->id)
                        ->where('ju.id', '=', $judge->id)
                        ->where('ro.value', '=', $this->round_value)
                        ->avg('sc.value');
                    $querypa1 = round($querypa1, 2);


                    $querypa2 = DB::table('performances AS pe')
                        ->join('judge_performance AS jp', 'jp.performance_id', '=', 'pe.id')
                        ->join('judges AS ju', 'ju.id', '=', 'jp.judge_id')
                        ->join('rounds AS ro', 'ro.judge_id', '=', 'ju.id')
                        ->join('scores AS sc', 'sc.round_id', '=', 'ro.id')
                        ->join('participants AS pa', 'pa.id', '=', 'sc.participant_id')
                        ->where('pa.id', '=', $participant2_current->id)
                        ->where('pe.id', '=', $performance->id)
                        ->where('ju.id', '=', $judge->id)
                        ->where('ro.value', '=', $this->round_value)
                        ->avg('sc.value');
                    $querypa2 = round($querypa2, 2);
                    $jurado = [
                        'round_value' => $this->round_value,
                        'puntajeparticipante1' => $querypa1,
                        'puntajeparticipante2' => $querypa2,
                    ];

                    // Agrega el array del jurado al array de $jurados
                    $jurados[] = $jurado;
                }
            } else {
            }
        } else {

            $participant1_current = "";
            $participant2_current = "";
        }
        return view('livewire.sanda-pantalla', compact('performances', 'participant1_current', 'participant2_current', 'averagespa1', 'averagespa2', 'averages', 'jurados','performance'));
    }
}
