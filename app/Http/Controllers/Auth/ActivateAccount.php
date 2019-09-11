<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class ActivateAccountController extends Controller
{
    public function view(){
        return view('auth/activate');
    }
}
