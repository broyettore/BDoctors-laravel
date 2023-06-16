<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // All review have doctor_id set to 1. This value should be replaced when DoctorSeeder will be ready
        $reviews = [
            [
                'doctor_id' => 1,
                'first_name' => 'Gaetano',
                'last_name' => 'Scolla',
                'email' => 'scollagae@gmail.com',
                'description' => 'Ottimo professionista, premuroso e competente.
                Con poche sedute ha risolto il mio mal di schiena.
                Riesce a far comprendere bene la causa del problema con spiegazioni sempre molto chiare ed esaustive.
                Lo consiglio vivamente.'
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Giovanni',
                'last_name' => 'Borghese',
                'email' => 'borggiov@gmail.com',
                'description' => 'Professionale ed empatico....bravissimo!Ha fatto una visita completa ed accurata, non fermandosi solo al problema per cui ho richiesto il suo aiuto. Grazie'
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Alfonso',
                'last_name' => 'Storti',
                'email' => 'storti22@gmail.com',
                'description' => "Il dottore è stato molto competente e preparato riuscendo a risolvere un problema che ho avuto alla schiena che non passava con l'utilizzo delle pomate o creme per mal di schiena.
                Consigliatissimo"
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Giulio',
                'last_name' => 'Genova',
                'email' => 'giulio77@gmail.com',
                'description' => "Grande cortesia, disponibilità all'ascolto, chiarezza e puntualità nelle spiegazioni!"
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Caterina',
                'last_name' => 'Bindi',
                'email' => 'caty@icloud.com',
                'description' => "La dottoressa è molto preparata, sempre disponibile e cordiale. Conduce la visita in maniera molto empatica. Identifica in maniera precisa le problematiche di salute e le sue prescrizioni sono molto efficaci."
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Erica',
                'last_name' => 'Battista',
                'email' => 'ericabattista@outlook.com',
                'description' => "Sono ampiamente soddisfatto del Dottore altrimenti non sarebbero circa 25 anni che sono con lui con tutta la mia famiglia buona giornata"
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Veronica',
                'last_name' => 'Giunta',
                'email' => 'veronicagiunta@outlook.com',
                'description' => "Persona molto cortese. Sono stato ricevuto all'orario indicato. Disponibile all'ascolto. Ha osservato con meticolosità i referti. Mette a proprio agio i suoi assistiti."
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Emilio',
                'last_name' => 'Scaccia',
                'email' => 'scaccia1989@outlook.com',
                'description' => "Grande disponibilità all'ascolto e alla soluzione di problemi. Ottima puntualità. La visita è stata accurata e risolutiva."
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Virginia',
                'last_name' => 'Speciale',
                'email' => 'specialevirginia@gmail.com',
                'description' => "E’ il mio medico di base da circa 30 anni e sono sempre molto soddisfatta della cortesia, disponibilità e professionalità"
            ],
            [
                'doctor_id' => 1,
                'first_name' => 'Cesare',
                'last_name' => 'Grandi',
                'email' => 'grandi7720@gmail.com',
                'description' => "Il dottor Barbaro si è dimostrato da subito protettivo e risolutivo nel l’indirizzare la soluzione al mio problema. Il team di supporto eccellente nello svolgimento delle procedure burocratiche amministrative."
            ],
        ];

        Schema::disableForeignKeyConstraints();
        Review::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($reviews as $review) {
            $new_review = new Review();

            foreach ($review as $key => $value) {
                $new_review->$key = $value;
            }

            $new_review->save();
        }
    }
}
