<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

class Batch extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function generateBatchCode()
    {

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $monthCount = PurchaseDetail::whereMonth('purchase_date', $currentMonth)
            ->whereYear('purchase_date', $currentYear)
            ->count();

        $nextBatchNumber = $monthCount;

        $monthAbbreviation = strtoupper(Carbon::now()->format('M'));
        $yearAbbreviation = Carbon::now()->format('y');

        $batchID = $monthAbbreviation . $yearAbbreviation . str_pad($nextBatchNumber, 4, '0', STR_PAD_LEFT); // e.g., OCT240001

        return $batchID;
    }
    public function purchaseDetail(): HasOne
    {
        return $this->hasOne(PurchaseDetail::class, 'id', 'purchase_id');
    }
    public function batchStatus(): HasMany
    {
        return $this->hasMany(BatchStatus::class, 'batch_id', 'id');
    }
}
