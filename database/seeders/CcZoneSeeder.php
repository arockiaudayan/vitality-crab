<?php

namespace Database\Seeders;

use App\Models\CcZone;
use Illuminate\Database\Seeder;

class CcZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CcZone::create([
            'id' => 1,
            'name' => 'Dach-Dare Zone',
            'added_user_id' => 1,
        ]);
        CcZone::create([
            'id' => 2,
            'name' => 'Torp Zone',
            'added_user_id' => 1,
        ]);
    }
}
