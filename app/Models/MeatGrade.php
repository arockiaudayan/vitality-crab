<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeatGrade extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function index()
    {
        return self::where('deleted_at', null)->get();
    }
}
