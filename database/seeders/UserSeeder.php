<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'Gaspare',
                'last_name' => 'Monte',
                'email' => 'gaspare@icloud.com',
                'is_admin' => 0,
                'password' => '12345678'
            ],
            [
                'first_name' => 'Roy',
                'last_name' => 'Bagnarola',
                'email' => 'roy@gmail.com',
                'is_admin' => 0,
                'password' => '12345678'
            ],
            [
                'first_name' => 'Luca',
                'last_name' => 'Paolella',
                'email' => 'luca@outlook.com',
                'is_admin' => 0,
                'password' => '12345678'
            ],
            [
                'first_name' => 'Daniele',
                'last_name' => 'Balestro',
                'email' => 'daniele@yahoo.com',
                'is_admin' => 0,
                'password' => '12345678'
            ],
            [
                'first_name' => 'Mikel',
                'last_name' => 'Gremi',
                'email' => 'mikel@libero.com',
                'is_admin' => 0,
                'password' => '12345678'
            ],
            //  5 utenti
            [
            "first_name" => "Martina",
            "last_name" => "Romano",
            "email" => "martina.romano@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Chiara",
            "last_name" => "Bianchi",
            "email" => "chiara.bianchi@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Ciro",
            "last_name" => "Esposito",
            "email" => "ciro.esposito@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Simona",
            "last_name" => "Conti",
            "email" => "simona.conti@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Alessio",
            "last_name" => "Romano",
            "email" => "alessio.romano@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            //  10 utenti
            [
            "first_name" => "Valentina",
            "last_name" => "Russo",
            "email" => "valentina.russo@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Matteo",
            "last_name" => "Fiore",
            "email" => "matteo.fiore@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Giulia",
            "last_name" => "Ferri",
            "email" => "giulia.ferri@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Simone",
            "last_name" => "De Luca",
            "email" => "simone.deluca@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Chiara",
            "last_name" => "Moretti",
            "email" => "chiara.moretti@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            // 15
            [
            "first_name" => "Giovanni",
            "last_name" => "Santoro",
            "email" => "giovanni.santoro@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Laura",
            "last_name" => "Rizzo",
            "email" => "laura.rizzo@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Davide",
            "last_name" => "Pellegrini",
            "email" => "davide.pellegrini@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Anna",
            "last_name" => "Barbieri",
            "email" => "anna.barbieri@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Marco",
            "last_name" => "Rossi",
            "email" => "marco.rossi@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            //  20
            [
            "first_name" => "Sara",
            "last_name" => "Bianchi",
            "email" => "sara.bianchi@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Luca",
            "last_name" => "Esposito",
            "email" => "luca.esposito@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Martina",
            "last_name" => "Conti",
            "email" => "martina.conti@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Francesco",
            "last_name" => "Romano",
            "email" => "francesco.romano@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Cristina",
            "last_name" => "Russo",
            "email" => "cristina.russo@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            //  25
            [
            "first_name" => "Giuseppe",
            "last_name" => "Fiore",
            "email" => "giuseppe.fiore@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Lucia",
            "last_name" => "Ferri",
            "email" => "lucia.ferri@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Alessandro",
            "last_name" => "De Luca",
            "email" => "alessandro.deluca@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Paola",
            "last_name" => "Moretti",
            "email" => "paola.moretti@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Enrico",
            "last_name" => "Santoro",
            "email" => "enrico.santoro@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            //  30
            [
            "first_name" => "Lidia",
            "last_name" => "Rizzo",
            "email" => "lidia.rizzo@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Andrea",
            "last_name" => "Pellegrini",
            "email" => "andrea.pellegrini@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Rosalia",
            "last_name" => "Barbieri",
            "email" => "rosalia.barbieri@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Francesco",
            "last_name" => "Gentile",
            "email" => "francesco.gentile@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Eleonora",
            "last_name" => "De Rosa",
            "email" => "eleonora.derosa@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            //  35
            [
            "first_name" => "Giorgio",
            "last_name" => "Ferrari",
            "email" => "giorgio.ferrari@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Federica",
            "last_name" => "Lombardi",
            "email" => "federica.lombardi@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Stefano",
            "last_name" => "Marini",
            "email" => "stefano.marini@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Elena",
            "last_name" => "Costa",
            "email" => "elena.costa@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            "first_name" => "Alessandro",
            "last_name" => "Caruso",
            "email" => "alessandro.caruso@example.com",
            "is_admin" => 0,
            "password" => "12345678"
            ],
            [
            'first_name' => 'Gaetano',
            'last_name' => 'Frascolla',
            'email' => 'gaetano@gmail.com',
            'is_admin' => 1,
            'password' => '12345678'
            ],
            //  40
        ];

        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($users as $user) {
            $new_user = new User();

            foreach ($user as $key => $value) {
                $new_user->$key = $value;
            }

            $new_user->save();
        }
    }
}
