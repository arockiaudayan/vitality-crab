<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PurchaseDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function BatchDetail(): HasOne
    {
        return $this->hasOne(Batch::class, 'purchase_id');
    }
}
