<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Etiqueta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\etiquetas;
use App\Models\Gasto;
use App\Models\Perfil;
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

        
        // Etiqueta::factory(15)->create();
        // Categoria::factory(5)->create();
        // Perfil::factory(3)->create();
       
        User::create([
             'name' => 'admin',
             'password'=>bcrypt('1234'),
             'email'=>"null"
         ]);
    }
}
