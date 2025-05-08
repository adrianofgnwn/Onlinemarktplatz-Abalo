<?php

namespace Database\Seeders;

use App\Models\AbUser;
use Illuminate\Database\Seeder;

class MassUserSeeder extends Seeder
{
    public function run()
    {
        AbUser::factory()->count(10000)->create();
    }
}

