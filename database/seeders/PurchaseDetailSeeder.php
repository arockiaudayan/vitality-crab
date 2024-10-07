<?php

namespace Database\Seeders;

use App\Models\PurchaseDetail;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PurchaseDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PurchaseDetail::create(attributes: [
            'id' => 1,
            'purchase_date' => Carbon::now()->format('Y-m-d'),
            'received_date' => null,
            'purchase_code' => 'PO-0001',
            'vendor_id' => 1,
            'grade_id' => 1,
            'rm_quantity' => 100.000,
            'cc_quantity' => 75.000,
            'rm_per_rate' => 10.00,
            'amount' => 1000.00,
            'added_user_id' => 1,
        ]);
        PurchaseDetail::create(attributes: [
            'id' => 2,
            'purchase_date' => Carbon::now()->format('Y-m-d'),
            'received_date' => Carbon::now()->format('Y-m-d'),
            'purchase_code' => 'PO-0002',
            'vendor_id' => 2,
            'grade_id' => 2,
            'rm_quantity' => 5000.000,
            'cc_quantity' => 4550.000,
            'rm_per_rate' => 200.00,
            'amount' => 20000.00,
            'added_user_id' => 1,
        ]);
        PurchaseDetail::create(attributes: [
            'id' => 3,
            'purchase_date' => Carbon::now()->format('Y-m-d'),
            'received_date' => null,
            'purchase_code' => 'PO-0003',
            'vendor_id' => 3,
            'grade_id' => 3,
            'rm_quantity' => 2000.000,
            'cc_quantity' => 1550.000,
            'rm_per_rate' => 300.00,
            'amount' => 50000.00,
            'added_user_id' => 1,
        ]);
    }
}
