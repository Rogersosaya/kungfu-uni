<?php

namespace App\Http\Controllers;

use App\Models\Judge;
use App\Models\Participant;
use App\Models\Performance;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $participants = Participant::all();
        return view('welcome', compact('participants'));
    }
    public function storeJudge(Request $request)
    {

        $nombre = $request->get('nombrejudge');
        $categoria = null;

        switch ($request->get('categoriajudge')) {
            case 1:
                $categoria = Judge::TAOLU;
                break;
            case 2:
                $categoria = Judge::SANDA;
                break;
            default:
                break;
        }
        $estilo = null;

        switch ($request->get('estilojudge')) {
            case 1:
                $estilo = Judge::MODERNO;
                break;
            case 2:
                $estilo = Judge::TRADICIONAL;
                break;
            default:
                break;
        }
        $tipo = null;

        switch ($request->get('tipojudge')) {
            case 1:
                $tipo = Judge::A;
                break;
            case 2:
                $tipo = Judge::B;
                break;
            default:
                break;
        }

        if ($nombre !== null && $categoria !== null && $estilo !== null && $tipo !== null) {
            Judge::create([
                'name' => $nombre,
                'category' => $categoria,
                'style' => $estilo,
                'type' => $tipo
            ]);

            return redirect()->route('welcome')->with('successjudge', 'Guardado correctamente');
        } else {
            // Manejar el caso en el que uno o más valores son nulos
            // Puedes mostrar un mensaje de error o redirigir a una página de error
            // Por ejemplo:
            return redirect()->route('welcome')->with('error_messagejudge', 'Uno o más campos son nulos');
        }
    }
    public function storeParticipant(Request $request)
    {
        $nombre = $request->get('nombreparticipant');
        $institucion = $request->get('institucionparticipant');
        $url = $request->get('urlparticipant');
        $acronimo = $request->get('acronimoparticipant');
        $categoria = null;

        switch ($request->get('categoriaparticipant')) {
            case 1:
                $categoria = Participant::TAOLU;
                break;
            case 2:
                $categoria = Participant::SANDA;
                break;
            default:
                break;
        }
        $estilo = null;

        switch ($request->get('estiloparticipant')) {
            case 1:
                $estilo = Participant::MODERNO;
                break;
            case 2:
                $estilo = Participant::TRADICIONAL;
                break;
            default:
                break;
        }


        if ($nombre !== null && $institucion !== null && $url !== null && $categoria !== null && $estilo !== null &&  $acronimo !== null) {
            Participant::create([
                'name' => $nombre,
                'institution' => $institucion,
                'acronym' => $acronimo,
                'url' => $url,
                'category' => $categoria,
                'style' => $estilo,

            ]);

            return redirect()->route('welcome')->with('successparticipant', 'Guardado correctamente');
        } else {
            return redirect()->route('welcome')->with('error_messageparticipant', 'Uno o más campos son nulos');
        }
    }
    public function storePerformance(Request $request)
    {
        $nombre = $request->get('nombreperformance');
        $peso = $request->get('pesoperformance');
        $url = $request->get('urlperformance');
        $idparticipante1 = $request->get('participante1performance');
        $idparticipante2 = $request->get('participante2performance');
        $ids = [];
        $categoria = null;

        switch ($request->get('categoriaperformance')) {
            case 1:
                $categoria = Performance::TAOLU;
                break;
            case 2:
                $categoria = Performance::SANDA;
                break;
            default:
                break;
        }
        $estilo = null;

        switch ($request->get('estiloperformance')) {
            case 1:
                $estilo = Performance::MODERNO;
                break;
            case 2:
                $estilo = Performance::TRADICIONAL;
                break;
            default:
                break;
        }
        

        
        if ($nombre !== null && $peso !== null && $categoria !== null && $estilo !== null) {
            $performance = Performance::create([
                'title' => $nombre,
                'weight' => $peso,
                'category' => $categoria,
                'style' => $estilo,
            ]);
            if ($categoria == Performance::TAOLU) {
                $performance->participants()->attach([$idparticipante1]);
            } elseif ($categoria == Performance::SANDA) {
                $performance->participants()->attach([$idparticipante1, $idparticipante2]);
            }
            return redirect()->route('welcome')->with('successperformance', 'Guardado correctamente');
        } else {
            return redirect()->route('welcome')->with('error_messageperformance', 'Uno o más campos son nulos');
        }
    }
}
