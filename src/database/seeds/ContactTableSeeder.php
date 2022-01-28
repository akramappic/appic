<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            DB::table('contacts')->insert([
                'name' => 'Name '.$i,
                'email' => 'email'.$i.'@appic.me',
                'message' => 'Message '.$i
            ]);
        }
    }
}