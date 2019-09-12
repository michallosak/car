<?php

namespace App\Http\Controllers\Verify;

use App\Supports\Verify\VerifyEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifyController extends Controller
{
    private $verify;

    public function __construct(VerifyEmail $verifyEmail)
    {
        $this->verify = $verifyEmail;
    }

    public function verifyEmail(){
        $this->verifyEmail()->
    }
}
