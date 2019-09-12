<?php

namespace App\Model\Verify;

use Illuminate\Database\Eloquent\Model;

class VerifyEmail extends Model
{
    protected $fillable = [
        'user_id', '_key'
    ];
}
