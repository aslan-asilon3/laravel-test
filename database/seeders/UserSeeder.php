<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $user = [
            [
                'id_user'=>'111',

                'image'=>'avatar.png',

                'name'=>'admin',

                'email'=>'admin@gmail.com',

                'password'=> bcrypt('admin123'),

                'level'=>'0',

                'phone'=>'08732435',

                'address'=>'Jl Garuda, Jakarta Selatan',
            ],
            [
                'id_user'=>'222',

                'image'=>'avatar.png',

                'name'=>'user',

                'email'=>'user@gmail.com',

                'password'=> bcrypt('user123'),

                'level'=>'1',

                'phone'=>'0873243546',

                'address'=>'Jl Merdeka, Jakarta Selatan',
            ],

        ];

        foreach ($user as $key => $value) {

            User::create($value);

        }
    }
}
