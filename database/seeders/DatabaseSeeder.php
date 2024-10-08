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
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            PermissionSeeder::class,
            RolesSeeder::class,
            VendorSeeder::class,
            VendorBankDetailSeeder::class,
            MeatGradeSeeder::class,
            CcZoneSeeder::class,
            PurchaseDetailSeeder::class,
            BatchSeeder::class,
            BatchStatusSeeder::class,

        ]);
    }
}
