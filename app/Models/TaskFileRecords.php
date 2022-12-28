<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskFileRecords extends Model
{
    use HasFactory;

    protected function getFilePathAttribute($value)
    {
        return env('APP_URL') .'uploads/'. $value;
    }
}
