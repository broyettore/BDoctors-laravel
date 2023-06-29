<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $reviews = [
            [
                'description' => 'Ottimo professionista, premuroso e competente.
                Con poche sedute ha risolto il mio mal di schiena.
                Riesce a far comprendere bene la causa del problema con spiegazioni sempre molto chiare ed esaustive.
                Lo consiglio vivamente.'
            ],
            [
                'description' => 'Professionale ed empatico....bravissimo!Ha fatto una visita completa ed accurata, non fermandosi solo al problema per cui ho richiesto il suo aiuto. Grazie'
            ],
            [
                'description' => "Il dottore è stato molto competente e preparato riuscendo a risolvere un problema che ho avuto alla schiena che non passava con l'utilizzo delle pomate o creme per mal di schiena.
                Consigliatissimo"
            ],
            [

                'description' => "Grande cortesia, disponibilità all'ascolto, chiarezza e puntualità nelle spiegazioni!"
            ],
            [

                'description' => "La dottoressa è molto preparata, sempre disponibile e cordiale. Conduce la visita in maniera molto empatica. Identifica in maniera precisa le problematiche di salute e le sue prescrizioni sono molto efficaci."
            ],
            [

                'description' => "Sono ampiamente soddisfatto del Dottore altrimenti non sarebbero circa 25 anni che sono con lui con tutta la mia famiglia buona giornata"
            ],
            [

                'description' => "Persona molto cortese. Sono stato ricevuto all'orario indicato. Disponibile all'ascolto. Ha osservato con meticolosità i referti. Mette a proprio agio i suoi assistiti."
            ],
            [

                'description' => "Grande disponibilità all'ascolto e alla soluzione di problemi. Ottima puntualità. La visita è stata accurata e risolutiva."
            ],
            [

                'description' => "E’ il mio medico di base da circa 30 anni e sono sempre molto soddisfatta della cortesia, disponibilità e professionalità"
            ],
            [

                'description' => "Il dottor Barbaro si è dimostrato da subito protettivo e risolutivo nel l’indirizzare la soluzione al mio problema. Il team di supporto eccellente nello svolgimento delle procedure burocratiche amministrative."
            ],
            [
            'description' => "Ho avuto un'ottima esperienza presso questo centro medico. Il personale è stato gentile e professionale, offrendo un'assistenza di alta qualità."
            ],
            [

                'description' => "Consiglio vivamente questo centro medico. Ho ricevuto una cura di alta qualità e un'ottima assistenza."
            ],
            [

                'description' => "Sono rimasto molto soddisfatto del trattamento ricevuto. Il personale è stato professionale e attento alle mie esigenze."
            ],
            [

                'description' => "Ho avuto un'esperienza positiva presso questo studio medico. La qualità del servizio e l'efficienza del personale sono state eccezionali."
            ],
            [

                'description' => "Sono molto contenta di aver scelto questo centro medico. Sono stata trattata con gentilezza e ho ricevuto tutte le informazioni necessarie."
            ],
            [

                'description' => "Ho ricevuto un'assistenza medica eccellente. Tutte le mie domande sono state risposte in modo chiaro e comprensibile."
            ],
            [

                'description' => "Sono rimasta molto soddisfatta del servizio offerto da questo centro medico. L'approccio professionale e la cura dimostrata sono stati eccezionali."
            ],
            [

                'description' => "Ho avuto un'ottima esperienza presso questo centro medico. Il personale è stato gentile e professionale, offrendo un'assistenza di alta qualità."
            ],
            [

                'description' => "Sono molto soddisfatta del trattamento ricevuto. Il centro medico è ben organizzato e ha fornito un servizio eccellente."
            ],
            [

                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto una diagnosi accurata e un'attenzione personalizzata durante tutto il processo di cura."
            ],
            [

                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il personale è stato cortese e le procedure sono state gestite in modo efficiente."
            ],
            [

                'description' => "Ho avuto un'esperienza positiva in questo centro medico. La professionalità e la competenza dimostrate mi hanno fatto sentire in buone mani."
            ],
            [

                'description' => "Sono rimasta molto soddisfatta del trattamento ricevuto. Il personale è stato attento e premuroso, garantendo un'esperienza confortevole."
            ],
            [
                'description' => "Ho ricevuto un'ottima assistenza medica. Il centro medico ha dimostrato grande professionalità e ha risposto a tutte le mie necessità."
            ],
            [

                'description' => "Sono rimasta molto soddisfatta del servizio offerto. Il personale è stato gentile e disponibile, creando un ambiente accogliente."
            ],
            [

                'description' => "Sono rimasto molto soddisfatto dell'assistenza ricevuta presso questo centro medico. Il personale è stato competente e premuroso."
            ],
            [

                'description' => "Consiglio vivamente questo studio medico. Ho avuto una buona esperienza e il personale si è preso cura di me in modo professionale."
            ],
            [

                'description' => "Ho ricevuto un trattamento eccellente in questo centro medico. Il personale è stato cortese e le procedure sono state eseguite con precisione."
            ],
            [

                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il personale è stato gentile e mi ha fornito tutte le informazioni necessarie."
            ],
            [

                'description' => "Ho avuto un'esperienza positiva presso questo studio medico. Il personale è stato professionale e ho ricevuto una cura di alta qualità."
            ],
            [

                'description' => "Sono rimasta molto soddisfatta del trattamento ricevuto. Il personale è stato attento alle mie esigenze e mi ha fatto sentire a mio agio."
            ],
            [

                'description' => "Ho avuto un'ottima esperienza in questo centro medico. Il personale è stato professionale, cortese e ho ricevuto un servizio di qualità."
            ],
            [

                'description' => "Sono molto soddisfatta del servizio ricevuto. Il centro medico ha dimostrato competenza e mi ha fornito un'assistenza completa."
            ],
            [

                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato gentile e competente."
            ],
            [
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un trattamento di qualità e il personale si è dimostrato disponibile."
            ],
            [

                'description' => "Ho avuto un'esperienza positiva presso questo centro medico. Il personale è stato attento alle mie esigenze e ho ricevuto un'assistenza eccellente."
            ],
            [

                'description' => "Sono rimasto molto soddisfatto del trattamento ricevuto. Il personale è stato professionale e ho avuto un'ottima cura."
            ],
            [

                'description' => "Ho ricevuto un'assistenza medica di alta qualità. Il centro medico è ben organizzato e il personale è stato cortese e professionale."
            ],
            [

                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Ho avuto un'esperienza positiva e il personale è stato disponibile."
            ],
            [

                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza eccellente e sono rimasta soddisfatta dei risultati ottenuti."
            ],
            [
                'description' => "Sono molto contento della cura ricevuta. Il personale è stato attento e ho ricevuto un'assistenza di qualità."
            ],
            [

                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato professionale e ho ricevuto un'ottima assistenza."
            ],
            [

                'description' => "Sono rimasto molto soddisfatto del trattamento ricevuto. Il centro medico ha dimostrato professionalità e ho avuto un'ottima cura."
            ],
            [
                'description' => "Sono molto soddisfatta del servizio ricevuto. Il personale è stato gentile e mi ha fornito tutte le informazioni necessarie."
            ],
            [
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un trattamento eccellente e il personale si è dimostrato competente."
            ],
            [
                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato attento alle mie esigenze e ho ricevuto una cura di qualità."
            ],
            [
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato competente e disponibile."
            ],
            [

                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza di alta qualità e il personale si è dimostrato professionale."
            ],
            [

                'description' => "Ho avuto un'esperienza molto positiva presso questo centro medico. Il personale è stato gentile e ho ricevuto un'ottima cura."
            ],
            [

                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il personale è stato attento e mi ha fatto sentire a mio agio."
            ],
            [

                'description' => "Ho ricevuto un'ottima assistenza in questo centro medico. Il personale è stato professionale e ho avuto una cura completa."
            ],
            [

                'description' => "Consiglio vivamente questo studio medico. Ho avuto un'esperienza positiva e il personale si è dimostrato cortese e competente."
            ],
            [

                'description' => "Sono rimasto molto soddisfatto dell'assistenza ricevuta. Il centro medico ha dimostrato professionalità e mi ha fornito un'ottima cura."
            ],
            [

                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato attento alle mie necessità e mi ha fornito un'assistenza di qualità."
            ],
            [
 
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato competente e mi ha fatto sentire a mio agio."
            ],
            [

                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza di alta qualità e il personale si è dimostrato professionale."
            ],
            [

                'description' => "Ho avuto un'esperienza molto positiva presso questo centro medico. Il personale è stato gentile e ho ricevuto un'ottima cura."
            ],
            [

                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il personale è stato attento e mi ha fornito tutte le informazioni necessarie."
            ],
            [

                'description' => "Consiglio vivamente questo centro medico. Ho ricevuto un trattamento eccellente e sono rimasto soddisfatto dei risultati."
            ],
            [

                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato professionale e mi ha fornito un'assistenza di qualità."
            ],
            [
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato competente e disponibile."
            ],
            [
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza eccellente e il personale si è dimostrato cortese."
            ],
            [
                'description' => "Ho avuto un'esperienza molto positiva presso questo centro medico. Il personale è stato gentile e ho ricevuto un'ottima cura."
            ],
            [
                'description' => "Sono rimasta molto soddisfatta del trattamento ricevuto. Il centro medico ha dimostrato professionalità e mi ha fornito un'ottima assistenza."
            ],
            [
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza di alta qualità e il personale si è dimostrato competente."
            ],
            [
                'description' => "Ho avuto un'esperienza molto positiva presso questo centro medico. Il personale è stato attento alle mie esigenze e mi ha fornito un'ottima assistenza."
            ],
            [
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato competente e mi ha fatto sentire a mio agio."
            ],
            [
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza di alta qualità e il personale si è dimostrato professionale."
            ],
            [
                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato attento alle mie necessità e mi ha fornito un'assistenza di qualità."
            ],
            [
                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il centro medico ha dimostrato professionalità e mi ha fornito un'ottima cura."
            ],
        ];
   
        Schema::disableForeignKeyConstraints();
        Review::truncate();
        Schema::enableForeignKeyConstraints();

        for($i = 1; $i <= 4000; $i++) {

            $newReview = new Review();
            $newReview->doctor_id = rand(1, 500);
            $newReview->first_name = $faker->firstName('male'|'female');
            $newReview->last_name = $faker->lastName();
            $newReview->email = $newReview->first_name . $newReview->last_name . $i . "@gmail.com";
            $newReview->description = $reviews[rand(0, 69)]["description"];

            $newReview->save();
        }
    }
}
