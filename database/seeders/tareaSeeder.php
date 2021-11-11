<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tarea;

class tareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea = new tarea;
        $tarea->nombre = "trabajar";
        $tarea->save();

        $tarea2 = new tarea;
        $tarea2->nombre = "descansar";
        $tarea2->save();

        $tarea3 = new tarea;
        $tarea3->nombre = "dormir";
        $tarea3->save();
    }
}
