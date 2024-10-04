<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vendor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function index()
    {
        return self::where('deleted_at', null)->get();
    }

    public function bankDetail(): HasOne
    {
        return $this->hasOne(VendorBankDetail::class, 'vendor_id');
    }
}
