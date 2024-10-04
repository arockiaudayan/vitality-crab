<?php

namespace Database\Seeders;

use App\Models\Batch;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batch::create([
            'id' => 1,
            'date' => Carbon::now()->format('Y-m-d'),
            'batch_code' => 'OCT240001',
            'purchase_id' => 1,
            'added_user_id' => 1,
        ]);
        Batch::create([
            'id' => 2,
            'date' => Carbon::now()->format('Y-m-d'),
            'batch_code' => 'OCT240002',
            'purchase_id' => 2,
            'added_user_id' => 1,
        ]);
        Batch::create([
            'id' => 3,
            'date' => Carbon::now()->format('Y-m-d'),
            'batch_code' => 'OCT240003',
            'purchase_id' => 3,
            'added_user_id' => 1,
        ]);
    }
}
