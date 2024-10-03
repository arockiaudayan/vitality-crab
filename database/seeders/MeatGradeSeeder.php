<?php

namespace Database\Seeders;

use App\Models\MeatGrade;
use Illuminate\Database\Seeder;

class MeatGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MeatGrade::create([
            'id' => 1,
            'name' => 'Small',
            'added_user_id' => 1,
        ]);
        MeatGrade::create([
            'id' => 2,
            'name' => 'Medium',
            'added_user_id' => 1,
        ]);
        MeatGrade::create([
            'id' => 3,
            'name' => 'Big',
            'added_user_id' => 1,
        ]);
    }
}
