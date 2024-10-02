<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permission')->insert([
            'id' => 1,
            'name' => 'Full Access',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permission')->insert([
            'id' => 2,
            'name' => 'Purchase',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permission')->insert([
            'id' => 3,
            'name' => 'Processing',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('permission')->insert([
            'id' => 4,
            'name' => 'Dispatch',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
