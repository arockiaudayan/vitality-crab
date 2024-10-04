<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BatchStatus extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Summary of create
     * @param mixed $batch_id
     * @param mixed $status
     * @return void
     */
    public static function addStatus($batch_id, $status)
    {
        self::create([
            'batch_id' => $batch_id,
            'status' => $status,
            'added_user_id' => Auth::user()->id,
        ]);

        return;
    }
}
