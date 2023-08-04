<?php

use Illuminate\Database\Seeder;
use App\Models\Cidade;

class CidadesTableSeeder extends Seeder
{
    public function run()
    {
        Cidade::create([
            'nome' => 'São Paulo',
            'estado' => 'São Paulo',
        ]);

        Cidade::create([
            'nome' => 'Rio de Janeiro',
            'estado' => 'Rio de Janeiro',
        ]);

        Cidade::create([
            'nome' => 'Belo Horizonte',
            'estado' => 'Minas Gerais',
        ]);

        Cidade::create([
            'nome' => 'Porto Alegre',
            'estado' => 'Rio Grande do Sul',
        ]);

        Cidade::create([
            'nome' => 'Salvador',
            'estado' => 'Bahia',
        ]);
    }
}

