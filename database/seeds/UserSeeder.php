<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i ++){
            User::create([
                'name' => 'Joe',
                'last_name' => 'Doe',
                'email' => 'joe.doe'.$i.'@gmail.com',
                'password' => Hash::make('qwe123')
            ]);
        }
    }
}
