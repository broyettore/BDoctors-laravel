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
                'doctor_id' => rand(1,40),
                'first_name' => 'Gaetano',
                'last_name' => 'Scolla',
                'email' => 'scollagae@gmail.com',
                'description' => 'Ottimo professionista, premuroso e competente.
                Con poche sedute ha risolto il mio mal di schiena.
                Riesce a far comprendere bene la causa del problema con spiegazioni sempre molto chiare ed esaustive.
                Lo consiglio vivamente.'
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giovanni',
                'last_name' => 'Borghese',
                'email' => 'borggiov@gmail.com',
                'description' => 'Professionale ed empatico....bravissimo!Ha fatto una visita completa ed accurata, non fermandosi solo al problema per cui ho richiesto il suo aiuto. Grazie'
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Alfonso',
                'last_name' => 'Storti',
                'email' => 'storti22@gmail.com',
                'description' => "Il dottore è stato molto competente e preparato riuscendo a risolvere un problema che ho avuto alla schiena che non passava con l'utilizzo delle pomate o creme per mal di schiena.
                Consigliatissimo"
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giulio',
                'last_name' => 'Genova',
                'email' => 'giulio77@gmail.com',
                'description' => "Grande cortesia, disponibilità all'ascolto, chiarezza e puntualità nelle spiegazioni!"
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Caterina',
                'last_name' => 'Bindi',
                'email' => 'caty@icloud.com',
                'description' => "La dottoressa è molto preparata, sempre disponibile e cordiale. Conduce la visita in maniera molto empatica. Identifica in maniera precisa le problematiche di salute e le sue prescrizioni sono molto efficaci."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Erica',
                'last_name' => 'Battista',
                'email' => 'ericabattista@outlook.com',
                'description' => "Sono ampiamente soddisfatto del Dottore altrimenti non sarebbero circa 25 anni che sono con lui con tutta la mia famiglia buona giornata"
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Veronica',
                'last_name' => 'Giunta',
                'email' => 'veronicagiunta@outlook.com',
                'description' => "Persona molto cortese. Sono stato ricevuto all'orario indicato. Disponibile all'ascolto. Ha osservato con meticolosità i referti. Mette a proprio agio i suoi assistiti."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Emilio',
                'last_name' => 'Scaccia',
                'email' => 'scaccia1989@outlook.com',
                'description' => "Grande disponibilità all'ascolto e alla soluzione di problemi. Ottima puntualità. La visita è stata accurata e risolutiva."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Virginia',
                'last_name' => 'Speciale',
                'email' => 'specialevirginia@gmail.com',
                'description' => "E’ il mio medico di base da circa 30 anni e sono sempre molto soddisfatta della cortesia, disponibilità e professionalità"
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Cesare',
                'last_name' => 'Grandi',
                'email' => 'grandi7720@gmail.com',
                'description' => "Il dottor Barbaro si è dimostrato da subito protettivo e risolutivo nel l’indirizzare la soluzione al mio problema. Il team di supporto eccellente nello svolgimento delle procedure burocratiche amministrative."
            ],
            ['doctor_id' => rand(1,40),
            'first_name' => 'Gabriele',
            'last_name' => 'Moretti',
            'email' => 'gabriele.moretti@gmail.com',
            'description' => "Ho avuto un'ottima esperienza presso questo centro medico. Il personale è stato gentile e professionale, offrendo un'assistenza di alta qualità."
            ],
            [
                'doctor_id' => rand(1, 40),
                'first_name' => 'Marco',
                'last_name' => 'Bianchi',
                'email' => 'marco.bianchi@gmail.com',
                'description' => "Consiglio vivamente questo centro medico. Ho ricevuto una cura di alta qualità e un'ottima assistenza."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giulia',
                'last_name' => 'Ricci',
                'email' => 'giulia.ricci@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del trattamento ricevuto. Il personale è stato professionale e attento alle mie esigenze."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Simone',
                'last_name' => 'Ferrari',
                'email' => 'simone.ferrari@gmail.com',
                'description' => "Ho avuto un'esperienza positiva presso questo studio medico. La qualità del servizio e l'efficienza del personale sono state eccezionali."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Valentina',
                'last_name' => 'Esposito',
                'email' => 'valentina.esposito@gmail.com',
                'description' => "Sono molto contenta di aver scelto questo centro medico. Sono stata trattata con gentilezza e ho ricevuto tutte le informazioni necessarie."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Alessandro',
                'last_name' => 'Conti',
                'email' => 'alessandro.conti@gmail.com',
                'description' => "Ho ricevuto un'assistenza medica eccellente. Tutte le mie domande sono state risposte in modo chiaro e comprensibile."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Francesca',
                'last_name' => 'Galli',
                'email' => 'francesca.galli@gmail.com',
                'description' => "Sono rimasta molto soddisfatta del servizio offerto da questo centro medico. L'approccio professionale e la cura dimostrata sono stati eccezionali."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Gabriele',
                'last_name' => 'Moretti',
                'email' => 'gabriele.moretti@gmail.com',
                'description' => "Ho avuto un'ottima esperienza presso questo centro medico. Il personale è stato gentile e professionale, offrendo un'assistenza di alta qualità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Sara',
                'last_name' => 'Gentile',
                'email' => 'sara.gentile@gmail.com',
                'description' => "Sono molto soddisfatta del trattamento ricevuto. Il centro medico è ben organizzato e ha fornito un servizio eccellente."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Luca',
                'last_name' => 'Ferraro',
                'email' => 'luca.ferraro@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto una diagnosi accurata e un'attenzione personalizzata durante tutto il processo di cura."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Elena',
                'last_name' => 'Mancini',
                'email' => 'elena.mancini@gmail.com',
                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il personale è stato cortese e le procedure sono state gestite in modo efficiente."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Michele',
                'last_name' => 'Riva',
                'email' => 'michele.riva@gmail.com',
                'description' => "Ho avuto un'esperienza positiva in questo centro medico. La professionalità e la competenza dimostrate mi hanno fatto sentire in buone mani."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Martina',
                'last_name' => 'Lombardi',
                'email' => 'martina.lombardi@gmail.com',
                'description' => "Sono rimasta molto soddisfatta del trattamento ricevuto. Il personale è stato attento e premuroso, garantendo un'esperienza confortevole."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Nicola',
                'last_name' => 'Vitali',
                'email' => 'nicola.vitali@gmail.com',
                'description' => "Ho ricevuto un'ottima assistenza medica. Il centro medico ha dimostrato grande professionalità e ha risposto a tutte le mie necessità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Federica',
                'last_name' => 'Rizzo',
                'email' => 'federica.rizzo@gmail.com',
                'description' => "Sono rimasta molto soddisfatta del servizio offerto. Il personale è stato gentile e disponibile, creando un ambiente accogliente."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Davide',
                'last_name' => 'Marini',
                'email' => 'davide.marini@gmail.com',
                'description' => "Sono rimasto molto soddisfatto dell'assistenza ricevuta presso questo centro medico. Il personale è stato competente e premuroso."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Silvia',
                'last_name' => 'Galli',
                'email' => 'silvia.galli@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho avuto una buona esperienza e il personale si è preso cura di me in modo professionale."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giovanni',
                'last_name' => 'Costa',
                'email' => 'giovanni.costa@gmail.com',
                'description' => "Ho ricevuto un trattamento eccellente in questo centro medico. Il personale è stato cortese e le procedure sono state eseguite con precisione."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Chiara',
                'last_name' => 'Santoro',
                'email' => 'chiara.santoro@gmail.com',
                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il personale è stato gentile e mi ha fornito tutte le informazioni necessarie."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Lorenzo',
                'last_name' => 'De Luca',
                'email' => 'lorenzo.deluca@gmail.com',
                'description' => "Ho avuto un'esperienza positiva presso questo studio medico. Il personale è stato professionale e ho ricevuto una cura di alta qualità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Elisa',
                'last_name' => 'Fabbri',
                'email' => 'elisa.fabbri@gmail.com',
                'description' => "Sono rimasta molto soddisfatta del trattamento ricevuto. Il personale è stato attento alle mie esigenze e mi ha fatto sentire a mio agio."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Paolo',
                'last_name' => 'Conte',
                'email' => 'paolo.conte@gmail.com',
                'description' => "Ho avuto un'ottima esperienza in questo centro medico. Il personale è stato professionale, cortese e ho ricevuto un servizio di qualità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giorgia',
                'last_name' => 'Serra',
                'email' => 'giorgia.serra@gmail.com',
                'description' => "Sono molto soddisfatta del servizio ricevuto. Il centro medico ha dimostrato competenza e mi ha fornito un'assistenza completa."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Andrea',
                'last_name' => 'Gatti',
                'email' => 'andrea.gatti@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato gentile e competente."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Federico',
                'last_name' => 'Ricci',
                'email' => 'federico.ricci@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un trattamento di qualità e il personale si è dimostrato disponibile."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Alice',
                'last_name' => 'Romano',
                'email' => 'alice.romano@gmail.com',
                'description' => "Ho avuto un'esperienza positiva presso questo centro medico. Il personale è stato attento alle mie esigenze e ho ricevuto un'assistenza eccellente."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Luigi',
                'last_name' => 'Ferrari',
                'email' => 'luigi.ferrari@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del trattamento ricevuto. Il personale è stato professionale e ho avuto un'ottima cura."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giorgia',
                'last_name' => 'Rossi',
                'email' => 'giorgia.rossi@gmail.com',
                'description' => "Ho ricevuto un'assistenza medica di alta qualità. Il centro medico è ben organizzato e il personale è stato cortese e professionale."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Matteo',
                'last_name' => 'Barbieri',
                'email' => 'matteo.barbieri@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Ho avuto un'esperienza positiva e il personale è stato disponibile."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Alessia',
                'last_name' => 'Pellegrini',
                'email' => 'alessia.pellegrini@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza eccellente e sono rimasta soddisfatta dei risultati ottenuti."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Dario',
                'last_name' => 'Conti',
                'email' => 'dario.conti@gmail.com',
                'description' => "Sono molto contento della cura ricevuta. Il personale è stato attento e ho ricevuto un'assistenza di qualità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Sofia',
                'last_name' => 'Vitale',
                'email' => 'sofia.vitale@gmail.com',
                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato professionale e ho ricevuto un'ottima assistenza."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Gianluca',
                'last_name' => 'De Angelis',
                'email' => 'gianluca.deangelis@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del trattamento ricevuto. Il centro medico ha dimostrato professionalità e ho avuto un'ottima cura."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Camilla',
                'last_name' => 'Galli',
                'email' => 'camilla.galli@gmail.com',
                'description' => "Sono molto soddisfatta del servizio ricevuto. Il personale è stato gentile e mi ha fornito tutte le informazioni necessarie."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Marco',
                'last_name' => 'Lombardi',
                'email' => 'marco.lombardi@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un trattamento eccellente e il personale si è dimostrato competente."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Francesca',
                'last_name' => 'Sorrentino',
                'email' => 'francesca.sorrentino@gmail.com',
                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato attento alle mie esigenze e ho ricevuto una cura di qualità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Nicola',
                'last_name' => 'Ricci',
                'email' => 'nicola.ricci@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato competente e disponibile."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Elena',
                'last_name' => 'Ferraro',
                'email' => 'elena.ferraro@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza di alta qualità e il personale si è dimostrato professionale."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giacomo',
                'last_name' => 'Serra',
                'email' => 'giacomo.serra@gmail.com',
                'description' => "Ho avuto un'esperienza molto positiva presso questo centro medico. Il personale è stato gentile e ho ricevuto un'ottima cura."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Valeria',
                'last_name' => 'Marino',
                'email' => 'valeria.marino@gmail.com',
                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il personale è stato attento e mi ha fatto sentire a mio agio."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Simone',
                'last_name' => 'Rinaldi',
                'email' => 'simone.rinaldi@gmail.com',
                'description' => "Ho ricevuto un'ottima assistenza in questo centro medico. Il personale è stato professionale e ho avuto una cura completa."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Alessandra',
                'last_name' => 'Giordano',
                'email' => 'alessandra.giordano@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho avuto un'esperienza positiva e il personale si è dimostrato cortese e competente."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Roberto',
                'last_name' => 'Santini',
                'email' => 'roberto.santini@gmail.com',
                'description' => "Sono rimasto molto soddisfatto dell'assistenza ricevuta. Il centro medico ha dimostrato professionalità e mi ha fornito un'ottima cura."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giulia',
                'last_name' => 'Martini',
                'email' => 'giulia.martini@gmail.com',
                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato attento alle mie necessità e mi ha fornito un'assistenza di qualità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Stefano',
                'last_name' => 'Gallo',
                'email' => 'stefano.gallo@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato competente e mi ha fatto sentire a mio agio."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Federica',
                'last_name' => 'Serra',
                'email' => 'federica.serra@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza di alta qualità e il personale si è dimostrato professionale."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Marco',
                'last_name' => 'Ferrara',
                'email' => 'marco.ferrara@gmail.com',
                'description' => "Ho avuto un'esperienza molto positiva presso questo centro medico. Il personale è stato gentile e ho ricevuto un'ottima cura."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Claudia',
                'last_name' => 'Marini',
                'email' => 'claudia.marini@gmail.com',
                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il personale è stato attento e mi ha fornito tutte le informazioni necessarie."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Antonio',
                'last_name' => 'Ferrari',
                'email' => 'antonio.ferrari@gmail.com',
                'description' => "Consiglio vivamente questo centro medico. Ho ricevuto un trattamento eccellente e sono rimasto soddisfatto dei risultati."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Laura',
                'last_name' => 'Pellegrino',
                'email' => 'laura.pellegrino@gmail.com',
                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato professionale e mi ha fornito un'assistenza di qualità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Massimo',
                'last_name' => 'Riva',
                'email' => 'massimo.riva@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato competente e disponibile."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Valentina',
                'last_name' => 'Costa',
                'email' => 'valentina.costa@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza eccellente e il personale si è dimostrato cortese."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Davide',
                'last_name' => 'Caruso',
                'email' => 'davide.caruso@gmail.com',
                'description' => "Ho avuto un'esperienza molto positiva presso questo centro medico. Il personale è stato gentile e ho ricevuto un'ottima cura."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Paola',
                'last_name' => 'Conte',
                'email' => 'paola.conte@gmail.com',
                'description' => "Sono rimasta molto soddisfatta del trattamento ricevuto. Il centro medico ha dimostrato professionalità e mi ha fornito un'ottima assistenza."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Giovanni',
                'last_name' => 'Fabbri',
                'email' => 'giovanni.fabbri@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza di alta qualità e il personale si è dimostrato competente."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Elisa',
                'last_name' => 'Rizzo',
                'email' => 'elisa.rizzo@gmail.com',
                'description' => "Ho avuto un'esperienza molto positiva presso questo centro medico. Il personale è stato attento alle mie esigenze e mi ha fornito un'ottima assistenza."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Enrico',
                'last_name' => 'Mancini',
                'email' => 'enrico.mancini@gmail.com',
                'description' => "Sono rimasto molto soddisfatto del servizio offerto da questo centro medico. Il personale è stato competente e mi ha fatto sentire a mio agio."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Caterina',
                'last_name' => 'Fontana',
                'email' => 'caterina.fontana@gmail.com',
                'description' => "Consiglio vivamente questo studio medico. Ho ricevuto un'assistenza di alta qualità e il personale si è dimostrato professionale."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Luigi',
                'last_name' => 'Vitali',
                'email' => 'luigi.vitali@gmail.com',
                'description' => "Ho avuto un'esperienza positiva in questo centro medico. Il personale è stato attento alle mie necessità e mi ha fornito un'assistenza di qualità."
            ],
            [
                'doctor_id' => rand(1,40),
                'first_name' => 'Roberta',
                'last_name' => 'Galli',
                'email' => 'roberta.galli@gmail.com',
                'description' => "Sono rimasta molto soddisfatta dell'assistenza ricevuta. Il centro medico ha dimostrato professionalità e mi ha fornito un'ottima cura."
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
