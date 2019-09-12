<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ActivateRequest;
use App\Supports\Auth\Activate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivateController extends Controller
{
    private $activate;

    public function __construct(Activate $activate)
    {
        $this->activate = $activate;
    }

    public function view(){
        return view('auth.activate');
    }

    public function activate(ActivateRequest $request){
        $this->activate->activate($request);
        return redirect(route('home'));
    }
}
