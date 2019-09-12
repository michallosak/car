<?php

namespace App\Http\Controllers\Settings;

use App\Supports\Settings\EditEmail;
use App\Http\Controllers\Controller;
use App\Supports\Verify\VerifyEmail;

class SettingsController extends Controller
{
    private $editEmail;
    private $verify;

    public function __construct(EditEmail $editEmail, VerifyEmail $verifyEmail)
    {
        $this->editEmail = $editEmail;
        $this->verify = $verifyEmail;
    }

    public function editEmailView(){
        $this->verify->store();
        return view('settings.email');
    }
}
