<?php

namespace Database\Seeders;

Use App\Models\tugas;
use Illuminate\Database\Seeder;

class tugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tgs = new tugas();
        $tgs->kelas = "Dasar Pemrograman";
        $tgs->tugas = "Pelajari Modul 1";
        $tgs->save();
    }
}
