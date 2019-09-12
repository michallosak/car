<?php


namespace App\Supports\Verify;


use Illuminate\Support\Facades\Auth;

class VerifyEmail
{

    private $verifyEmail;

    public function __construct(VerifyEmail $verifyEmail)
    {
        $this->verifyEmail = $verifyEmail;
    }

    private function generateKey(){
        $key = substr(md5(time().date('Y-m-d H:i:s')), 15, 15);
        return $key;
    }

    public function store($user_id){
        $this->verifyEmail->create([
            'user_id' => $user_id,
            '_key' => $this->generateKey()
        ]);
    }

    private function getKeyDB(){
        $keyDB = $this->verifyEmail->where('user_id', Auth::id())
            ->value('_key');
        return $keyDB;
    }

    public function keyComparison($key){
        $keyDB = $this->getKeyDB();
        if ($keyDB != $key){
            return redirect()->back();
        }else{
            $this->deleteKey();
        }
    }

    private function deleteKey(){
        $this->verifyEmail->where('user_id', Auth::id())
            ->delete();
        return true;
    }

    public function verifyEmail(){

    }



}
