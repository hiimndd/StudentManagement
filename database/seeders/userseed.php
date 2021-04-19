<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,  
            'username' => "admin",
            'password' => Hash::make('123'),
            'email' => 'hiimndd@gmail.com',
            'name' => 'Nguyễn Tiến Đạt',
            'birthday' => '1999-04-20',
            'permission' => 1,
            
        ]);
    }
}
