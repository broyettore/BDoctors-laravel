<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            [
                "user_id" => 1,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Roma, 1, Milano, Lombardia',
                'services' => 'Visita Cardiologica',
                'phone_number' => '+39 02 1234567',
            ],
            [
                "user_id" => 2,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso Vittorio Emanuele II, 10, Roma, Lazio',
                'services' => 'Visita dermatologica',
                'phone_number' => '+39 06 2345678',
            ],
            [
                "user_id" => 3,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Dante Alighieri, 25, Firenze, Toscana',
                'services' => 'Visita gastroenterologica',
                'phone_number' => '+39 01 3456789',
            ],
            [
                "user_id" => 4,
                "cv" => "",
                "photo" => "",
                'address' => 'Piazza del Duomo, 6, Napoli, Campania',
                'services' => 'Visita neurologica',
                'phone_number' => '+39 08 4567890',
            ],
            [
                "user_id" => 5,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Garibaldi, 8, Genova, Liguria',
                'services' => 'Visita ortopedica',
                'phone_number' => '+39 09 5678901',
            ],
            [
                "user_id" => 6,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso Buenos Aires, 50, Milano, Lombardia',
                'services' => 'Visita pediatrica',
                'phone_number' => '+39 02 6789012',
            ]
            ,
            [
                "user_id" => 7,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Veneto, 15, Roma, Lazio',
                'services' => 'Visita psichiatrica',
                'phone_number' => '+39 06 7890123',
            ],
            [
                "user_id" => 8,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso Umberto I, 30, Palermo, Sicilia',
                'services' => 'Visita radiologica',
                'phone_number' => '+39 01 8901234',
            ],
            [
                "user_id" => 9,
                "cv" => "",
                "photo" => "",
                'address' => 'Via dei Mille, 12, Torino, Piemonte',
                'services' => 'Visita chirurgica generale',
                'phone_number' => '+39 08 9012345',
            ],
            [
                "user_id" => 10,
                "cv" => "",
                "photo" => "",
                'address' => 'Piazza San Marco, 1, Venezia, Veneto',
                'services' => 'Visita otorinolaringoiatra',
                'phone_number' => '+39 09 0123456',
            ],            
            [
                "user_id" => 11,
                "cv" => "",
                "photo" => "",
                'address' => 'Via XX Settembre, 20, Bologna, Emilia-Romagna',
                'services' => 'Visita endocrinologa',
                'phone_number' => '+39 02 3456789',
            ],
            [
                "user_id" => 12,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso Italia, 5, Firenze, Toscana',
                'services' => 'Visita urologica',
                'phone_number' => '+39 06 4567890',
            ],
            [
                "user_id" => 13,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Roma, 2, Milano, Lombardia',
                'services' => 'Visita ginecologica',
                'phone_number' => '+39 01 5678901',
            ],
            [
                "user_id" => 14,
                "cv" => "",
                "photo" => "",
                'address' => 'Piazza Navona, 10, Roma, Lazio',
                'services' => 'Visita oftamologica',
                'phone_number' => '+39 08 6789012',
            ],
            [
                "user_id" => 15,
                "cv" => "",
                "photo" => "",
                'address' => 'Lungarno Acciaiuoli, 15, Firenze, Toscana',
                'services' => 'Visita allergologica',
                'phone_number' => '+39 09 7890123',
            ],            [
                "user_id" => 16,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Toledo, 18, Napoli, Campania',
                'services' => 'Visita ematologica',
                'phone_number' => '+39 02 8901234',
            ],
            [
                "user_id" => 17,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso Italia, 10, Genova, Liguria',
                'services' => 'Visita cardiovascolare',
                'phone_number' => '+39 06 9012345',
            ],
            [
                "user_id" => 18,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Montenapoleone, 8, Milano, Lombardia',
                'services' => 'Visita neurochirurgica',
                'phone_number' => '+39 01 0123456',
            ],
            [
                "user_id" => 19,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso Vittorio Emanuele, 50, Roma, Lazio',
                'services' => 'Visita nefrologica',
                'phone_number' => '+39 08 1234567',
            ],
            [
                "user_id" => 20,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Libertà, 30, Palermo, Sicilia',
                'services' => 'Visita pneumologica',
                'phone_number' => '+39 09 2345678',
            ],
            [
                "user_id" => 21,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Po, 1, Torino, Piemonte',
                'services' => 'Visita oncologica',
                'phone_number' => '+39 02 3456789',
            ],
            [
                "user_id" => 22,
                "cv" => "",
                "photo" => "",
                'address' => 'Piazza San Marco, 5, Venezia, Veneto',
                'services' => 'Visita cardiologica',
                'phone_number' => '+39 06 4567890',
            ],
            [
                "user_id" => 23,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Rizzoli, 10, Bologna, Emilia-Romagna',
                'services' => 'Visita dermatologica',
                'phone_number' => '+39 01 5678901',
            ],
            [
                "user_id" => 24,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso dei Tintori, 15, Firenze, Toscana',
                'services' => 'Visita gastroenterologica',
                'phone_number' => '+39 08 6789012',
            ],
            [
                "user_id" => 25,
                "cv" => "",
                "photo" => "",
                'address' => 'Via dei Tribunali, 20, Napoli, Campania',
                'services' => 'Visita neurologica',
                'phone_number' => '+39 09 7890123',
            ],
            [
                "user_id" => 26,
                "cv" => "",
                "photo" => "",
                'address' => 'Via San Lorenzo, 8, Genova, Liguria',
                'services' => 'Visita ortopedica',
                'phone_number' => '+39 02 8901234',
            ],
            [
                "user_id" => 27,
                "cv" => "",
                "photo" => "",
                'address' => 'Via della Spiga, 12, Milano, Lombardia
                ',
                'services' => 'Visita pediatrica',
                'phone_number' => '+39 06 9012345',
            ],
            [
                "user_id" => 28,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso Vittorio Emanuele II, 20, Roma, Lazio',
                'services' => 'Visita psichiatrica',
                'phone_number' => '+39 01 0123456',
            ],
            [
                "user_id" => 29,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Maqueda, 15, Palermo, Sicilia',
                'services' => 'Visita radiologica',
                'phone_number' => '+39 08 1234567',
            ],
            [
                "user_id" => 30,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Po, 10, Torino, Piemonte',
                'services' => 'Visita chirurgica generale',
                'phone_number' => '+39 09 2345678',
            ]
            ,
            [
                "user_id" => 31,
                "cv" => "",
                "photo" => "",
                'address' => 'Piazza San Marco, 15, Venezia, Veneto',
                'services' => 'Visita otorinolaringoiatrica',
                'phone_number' => '+39 02 3456789',
            ],
            [
                "user_id" => 32,
                "cv" => "",
                "photo" => "",
                'address' => "Via dell'Indipendenza, 5, Bologna, Emilia-Romagna",
                'services' => 'Visita endocirnologica',
                'phone_number' => '+39 06 4567890',
            ],
            [
                "user_id" => 33,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Tornabuoni, 10, Firenze, Toscana',
                'services' => 'Visita urologica',
                'phone_number' => '+39 01 5678901',
            ],
            [
                "user_id" => 34,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Chiaia, 20, Napoli, Campania',
                'services' => 'Visita ginecologica',
                'phone_number' => '+39 08 6789012',
            ],
            [
                "user_id" => 35,
                "cv" => "",
                "photo" => "",
                'address' => 'Via XX Settembre, 30, Genova, Liguria',
                'services' => 'Visita oftamologica',
                'phone_number' => '+39 09 7890123',
            ],
            [
                "user_id" => 36,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Montenapoleone, 10, Milano, Lombardia',
                'services' => 'Visita allergologica',
                'phone_number' => '+39 02 8901234',
            ],
            [
                "user_id" => 37,
                "cv" => "",
                "photo" => "",
                'address' => 'Via del Corso, 50, Roma, Lazio',
                'services' => 'Visita ematologica',
                'phone_number' => '+39 06 9012345',
            ],
            [
                "user_id" => 38,
                "cv" => "",
                "photo" => "",
                'address' => 'Corso Vittorio Emanuele, 15, Palermo, Sicilia',
                'services' => 'Visita chirurgica cardiovascolare',
                'phone_number' => '+39 01 0123456',
            ],
            [
                "user_id" => 39,
                "cv" => "",
                "photo" => "",
                'address' => 'Via Po, 20, Torino, Piemonte',
                'services' => 'Visita neurochirirgica',
                'phone_number' => '+39 08 1234567',
            ],
            [
                "user_id" => 40,
                "cv" => "",
                "photo" => "",
                'address' => 'Piazza San Marco, 20, Venezia, Veneto',
                'services' => 'Visita nefrologica',
                'phone_number' => '+39 09 2345678',
            ],
            [
                "user_id" => 41,
                "cv" => "",
                "photo" => "",
                'address' => 'Piazza San Marco, 20, Venezia, Veneto',
                'services' => 'Visita nefrologica',
                'phone_number' => '+39 09 2345678',
            ]
        ];

        Schema::disableForeignKeyConstraints();
        Doctor::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($doctors as $doctor) {
            $new_doctor = new Doctor();

            foreach ($doctor as $key => $value) {
                $new_doctor->$key = $value;
            }

            $new_doctor->save();
        }
    }
}
