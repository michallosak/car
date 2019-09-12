<?php


namespace App\Supports\Verify;


use App\Mail\Auth\VerifyMail;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VerifyEmail
{

   private $verifyEmail;

    public function __construct(\App\Model\Verify\VerifyEmail $verifyEmail)
    {
        $this->verifyEmail = $verifyEmail;
    }

    private function generateKey(){
        $key = substr(md5(time().date('Y-m-d H:i:s')), 15, 15);
        return $key;
    }

    private function getKeyDB(){
        $keyDB = $this->verifyEmail->where('user_id', Auth::id())
            ->value('_key');
        return $keyDB;
    }

    public function saveKey($user_id, $name, $email){
        $_key = $this->generateKey();
        $this->verifyEmail->create([
            'user_id' => $user_id,
            '_key' => $_key
        ]);
        $dataEmail = [
            'name' => $name,
            'email' => $email,
            'key' => $_key
        ];
        $this->sendEmail($dataEmail);
    }

    public function checkKey($key){
        if ($this->getKeyDB() != $key){
            return false;
        }
        else{
            $this->deleteKey();
        }
    }

    private function deleteKey(){
        $this->verifyEmail->where('user_id', Auth::id())->delete();
    }

    public function activate($key){
        $keyDB = $this->getKeyDB();
        if ($keyDB != $key){
            return $this->getKeyDB();
        }
        $this->updateUserActivate();
        $this->deleteKey();
        return true;
    }

    private function updateUserActivate(){
        User::where('id', Auth::id())
            ->update([
                'is_activated' => 1
            ]);
    }

    private function sendEmail($data){
        Mail::to($data['email'])->send(new VerifyMail($data));
    }
}
