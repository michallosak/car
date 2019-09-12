<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ActivateRequest;
use App\Supports\Verify\VerifyEmail;
use App\Http\Controllers\Controller;

class ActivateController extends Controller
{
    private $verify;

    public function __construct(VerifyEmail $verify)
    {
        $this->verify = $verify;
    }

    public function view(){
        return view('auth.activate');
    }

    public function activate(ActivateRequest $request){
        $this->verify->activate($request->key);
        return redirect(route('home'));
    }
}
