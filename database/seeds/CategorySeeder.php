<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i ++){
            \App\Model\Category::create([
                'user_id' => 1,
                'name' => 'Name ' . $i
            ]);
        }
    }
}
