<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

         User::create(array(
          'nome' => 'BRUNO M. CERQUEIRA',
          'usuario' => 'BMCERQUEIRA',
          'matricula' => '14100',
          'email' => 'brunocerqueira@sost.com.br',
          'senha' => 'Hash::make(123456)',
          'segmento' => 'ADM',
          'cargo' => 'Analista de TI',
          'codgerente' => '1',
        ));
    }
}
