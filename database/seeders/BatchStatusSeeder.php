<?php

namespace Database\Seeders;

use App\Models\BatchStatus;
use Illuminate\Database\Seeder;

class BatchStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BatchStatus::create([
            'id' => 1,
            'batch_id' => 1,
            'status' => 0,
            'added_user_id' => 1,
        ]);
        BatchStatus::create([
            'id' => 2,
            'batch_id' => 2,
            'status' => 1,
            'added_user_id' => 1,
        ]);
        BatchStatus::create([
            'id' => 3,
            'batch_id' => 3,
            'status' => 0,
            'added_user_id' => 1,
        ]);
    }
}
