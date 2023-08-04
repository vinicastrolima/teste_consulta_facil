<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacientesTableSeeder extends Seeder
{
    public function run()
    {
        Paciente::create([
            'nome' => 'Ana Souza',
            'cpf' => '123.456.789-00',
            'celular' => '(11) 98765-4321',
        ]);

        Paciente::create([
            'nome' => 'Carlos Oliveira',
            'cpf' => '987.654.321-00',
            'celular' => '(21) 99999-8888',
        ]);

        Paciente::create([
            'nome' => 'Fernanda Santos',
            'cpf' => '567.890.123-00',
            'celular' => '(31) 55555-4444',
        ]);

        Paciente::create([
            'nome' => 'Ricardo Silva',
            'cpf' => '789.012.345-00',
            'celular' => '(41) 33333-2222',
        ]);

        Paciente::create([
            'nome' => 'Laura Ferreira',
            'cpf' => '111.222.333-00',
            'celular' => '(51) 77777-6666',
        ]);

        Paciente::create([
            'nome' => 'Pedro Costa',
            'cpf' => '444.555.666-00',
            'celular' => '(61) 22222-9999',
        ]);

        Paciente::create([
            'nome' => 'Mariana Rodrigues',
            'cpf' => '777.888.999-00',
            'celular' => '(71) 77777-8888',
        ]);

        Paciente::create([
            'nome' => 'Lucas Nunes',
            'cpf' => '555.666.777-00',
            'celular' => '(81) 66666-5555',
        ]);
    }
}
