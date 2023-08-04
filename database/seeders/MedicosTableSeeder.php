<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medico;
use App\Models\Cidade;
use Illuminate\Support\Facades\DB;

class MedicosTableSeeder extends Seeder
{
    public function run()
    {
        // Obtenha um array de todas as IDs de cidades existentes no banco de dados
        $cidadeIds = Cidade::pluck('id')->toArray();

        Medico::create([
            'nome' => 'Dr. João Silva',
            'especialidade' => 'Clínico Geral',
            'cidade_id' => $this->getRandomCidadeId($cidadeIds),
        ]);

        Medico::create([
            'nome' => 'Dra. Maria Santos',
            'especialidade' => 'Pediatra',
            'cidade_id' => $this->getRandomCidadeId($cidadeIds),
        ]);

        Medico::create([
            'nome' => 'Dr. Carlos Ferreira',
            'especialidade' => 'Dermatologista',
            'cidade_id' => $this->getRandomCidadeId($cidadeIds),
        ]);

        Medico::create([
            'nome' => 'Dra. Ana Oliveira',
            'especialidade' => 'Ginecologista',
            'cidade_id' => $this->getRandomCidadeId($cidadeIds),
        ]);

        Medico::create([
            'nome' => 'Dr. Pedro Costa',
            'especialidade' => 'Cardiologista',
            'cidade_id' => $this->getRandomCidadeId($cidadeIds),
        ]);

        Medico::create([
            'nome' => 'Dra. Fernanda Alves',
            'especialidade' => 'Oftalmologista',
            'cidade_id' => $this->getRandomCidadeId($cidadeIds),
        ]);

        Medico::create([
            'nome' => 'Dr. Ricardo Nunes',
            'especialidade' => 'Ortopedista',
            'cidade_id' => $this->getRandomCidadeId($cidadeIds),
        ]);

        Medico::create([
            'nome' => 'Dra. Laura Rodrigues',
            'especialidade' => 'Psiquiatra',
            'cidade_id' => $this->getRandomCidadeId($cidadeIds),
        ]);
    }

    // Função auxiliar para retornar uma ID de cidade aleatória do array de IDs de cidades
    private function getRandomCidadeId($cidadeIds)
    {
        return $cidadeIds[array_rand($cidadeIds)];
    }
}
