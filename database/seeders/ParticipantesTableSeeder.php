<?php

namespace Database\Seeders;

use App\Models\Participante;
use Illuminate\Database\Seeder;

class ParticipantesTableSeeder extends Seeder
{
    public function run()
    {
        // Seed the participantes table with 50 records
        Participante::factory()->count(50)->create();
    }
}