<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * pass: saitamaheroforfun+*@99#
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'One King',
            'email' => 'king@gmail.com',
            'password' => Hash::make('saitamaheroforfun+*@99#'),
        ]);

    }
}
