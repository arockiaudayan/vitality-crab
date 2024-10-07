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

    public static function getStatus($batch_id)
    {
        // 0- not received,
        // 1 -received,
        // 2- picking,
        // 3- picked,
        // 4- in-processing,
        // 5- completed,
        // 6- in-completed,
        $status = self::where('batch_id', $batch_id)->latest()->first();

        switch ($status->status) {
            case 0:
                return '<span class="badge badge-sm bg-gradient-warning">not-received</span>';
                break;
            case 1:
                return '<span class="badge badge-sm bg-gradient-info">received</span>';
                break;
            case 2:
                return '<span class="badge badge-sm bg-gradient-warning">picking</span>';
                break;
            case 3:
                return '<span class="badge badge-sm bg-gradient-info">picked</span>';
                break;
            case 4:
                return '<span class="badge badge-sm bg-gradient-warning">in-processing</span>';
                break;
            case 5:
                return '<span class="badge badge-sm bg-gradient-success">completed</span>';
                break;
            case 6:
                return '<span class="badge badge-sm bg-gradient-info">in-completed</span>';
                break;
            default:
                //code block
        }

        return;
    }
}
