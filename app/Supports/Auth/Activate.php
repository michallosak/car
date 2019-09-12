<?php


namespace App\Supports\Auth;


use App\Supports\Verify\VerifyEmail;
use App\User;
use Illuminate\Support\Facades\Auth;

class Activate
{
    private $verify;

    public function __construct(VerifyEmail $verifyEmail)
    {
        $this->verify = $verifyEmail;
    }

    public function activate($date){
        $this->verify->keyComparison($date->key);
        $this->activated();
    }

    private function activated(){
        User::where('id', Auth::id())
            ->update([
                'is_activated' => 1
            ]);
        return true;
    }
}
