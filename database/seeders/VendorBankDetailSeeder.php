<?php

namespace Database\Seeders;

use App\Models\VendorBankDetail;
use Illuminate\Database\Seeder;

class VendorBankDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VendorBankDetail::create([
            'id' => 1,
            'vendor_id' => 1,
            'bank_name' => 'SBI',
            'acc_no' => '56897456598',
            'ifsc_code' => 'DF4568982',
        ]);
        VendorBankDetail::create([
            'id' => 2,
            'vendor_id' => 2,
            'bank_name' => null,
            'acc_no' => null,
            'ifsc_code' => null,
        ]);
        VendorBankDetail::create([
            'id' => 3,
            'vendor_id' => 3,
            'bank_name' => null,
            'acc_no' => null,
            'ifsc_code' => null,
        ]);
        VendorBankDetail::create([
            'id' => 4,
            'vendor_id' => 4,
            'bank_name' => 'CANARA',
            'acc_no' => '1236547',
            'ifsc_code' => 'CA258963',
        ]);
    }
}
