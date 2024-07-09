<?php

namespace Database\Seeders;

use App\Models\Participant;
use App\Models\Performance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participant::create([
            'name' => 'Juan Fabian',
            'institution' => 'Universidad Nacional de Ingeniería',
            'acronym' => 'UNI',
            'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Uni-logo_transparente_granate.png/611px-Uni-logo_transparente_granate.png',
            'category' => Participant::SANDA,
            'style' => Performance::MODERNO,
        ]);
        Participant::create([
            'name' => 'Alondo Gomez',
            'institution' => 'Universidad Nacional Mayor de San Marcos',
            'acronym' => 'UNMSM',
            'url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/UNMSM_coatofarms_seal.svg/1200px-UNMSM_coatofarms_seal.svg.png',
            'category' => Participant::SANDA,
            'style' => Performance::MODERNO,
        ]);
        Participant::create([
            'name' => 'Manuel Ortiz',
            'institution' => 'Pontificia Universidad Católica del Perú',
            'acronym' => 'PUCP',
            'url' => 'https://cide.pucp.edu.pe/wp-content/uploads/2021/07/cropped-favicon-512px.png',
            'category' => Participant::TAOLU,
            'style' => Performance::TRADICIONAL,
        ]);
        Participant::create([
            'name' => 'Emilio Cartagena',
            'institution' => 'Universidad de Lima',
            'acronym' => 'ULIMA',
            'url' => 'https://dondeestudiar.pe/wp-content/uploads/2022/12/udl.jpg',
            'category' => Participant::SANDA,
            'style' => Performance::MODERNO,
        ]);
        Participant::create([
            'name' => 'Paolo Casas',
            'institution' => 'Universidad Tecnológica del Perú',
            'acronym' => 'UTP',
            'url' => 'https://utp.hiringroom.com/data/accounts/utp/vacancies/007ea4a8880ca6c4d70934b194f33083.jpeg',
            'category' => Participant::TAOLU,
            'style' => Performance::MODERNO,
        ]);
        $part1 = Participant::find(1);
        $part2 = Participant::find(2);
        $part3 = Participant::find(3);
        $part4 = Participant::find(4);
        $part5 = Participant::find(5);

        Performance::create([
            'title' => $part1->name . ' vs ' . $part2->name,
            'weight' => "60 kg",
            'category' => Performance::SANDA,
            'style' => Performance::MODERNO,
        ]);
        Performance::create([
            'title' => $part1->name . ' vs ' . $part3->name,
            'weight' => "85 kg",
            'category' => Performance::SANDA,
            'style' => Performance::MODERNO,
        ]);
        Performance::create([
            'title' => $part4->name,
            'weight' => "60 kg",
            'category' => Performance::TAOLU,
            'style' => Performance::MODERNO,
        ]);
        Performance::create([
            'title' => $part5->name,
            'weight' => "60 kg",
            'category' => Performance::TAOLU,
            'style' => Performance::TRADICIONAL,
        ]);

        $performance1 = Performance::find(1);
        $performance2 = Performance::find(2);
        $performance3 = Performance::find(3);
        $performance4 = Performance::find(4);

        $performance1->participants()->attach([$part1->id, $part2->id]);
        $performance2->participants()->attach([$part1->id, $part3->id]);
        $performance3->participants()->attach([$part4->id]);
        $performance4->participants()->attach([$part5->id]);
        // Performance::create([
        //     'type' => Performance::TAOLU,
        // ]);
        // Performance::create([
        //     'type' => Performance::TAOLU,
        // ]);



    }
}
