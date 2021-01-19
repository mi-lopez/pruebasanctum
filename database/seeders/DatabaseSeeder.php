<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cursos = \App\Models\Curso::create([
            'nivel' => '1º Básico',
            'letra' => 'A'
        ]);

        \App\Models\Alumno::create([
           'curso_id' => $cursos->id,
           'nombre' => 'Francisco Seco'
        ]);

        \App\Models\Alumno::create([
           'curso_id' => $cursos->id,
           'nombre' => 'Nicolás Vega'
        ]);

    }
}
