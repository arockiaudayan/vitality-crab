<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create(attributes: [
            'id' => 1,
            'company_name' => 'Bednar Group',
            'gst' => null,
            'phone' => '98-3727510',
            'email' => 'jettie.streich@stroman.info	',
            'owner_name' => 'peter',
            'pan_no' => null,
            'source_code' => 'BG01',
            'status' => 1,
            'added_user_id' => 1,
        ]);
        Vendor::create(attributes: [
            'id' => 2,
            'company_name' => 'Connell and Sons',
            'gst' => null,
            'phone' => '42-9366835',
            'email' => 'nmraz@lockman.com',
            'owner_name' => 'john',
            'pan_no' => '8016442318016',
            'source_code' => 'OS25',
            'status' => 1,
            'added_user_id' => 1,
        ]);
        Vendor::create(attributes: [
            'id' => 3,
            'company_name' => 'Nikolaus LLC',
            'gst' => 'GST80-1644231',
            'phone' => null,
            'email' => null,
            'owner_name' => 'Niko',
            'pan_no' => null,
            'source_code' => 'NL05',
            'status' => 1,
            'added_user_id' => 1,
        ]);
        Vendor::create(attributes: [
            'id' => 4,
            'company_name' => 'Walker Ltd',
            'gst' => null,
            'phone' => null,
            'email' => null,
            'owner_name' => 'Walker',
            'pan_no' => '06-9738913',
            'source_code' => 'WL01',
            'status' => 1,
            'added_user_id' => 1,
        ]);
    }
}
