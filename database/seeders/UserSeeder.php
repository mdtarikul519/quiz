<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::truncate();
        User::create([
            'name' => 'tarek',
            'role_id' => '1',
            'email' => 'tarikulmd519@gmail.com',
            'phon_number' => 01721251533,
            'image' => 'quiz/sorif.png',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'sorif',
            'role_id' => '2',
            'email' => 'sorif@gmail.com',
            'phon_number' => 01721251533,
            'image' => 'quiz/sorif.png',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'joton',
            'role_id' => '2',
            'email' => 'joton@gmail.com',
            'phon_number' => 01721251533,
            'image' => 'quiz/sorif.png',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'rana',
            'role_id' => '2',
            'email' => 'rana@gmail.com',
            'phon_number' => 01721251533,
            'image' => 'quiz/rana.png',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'sajid',
            'role_id' => '2',
            'email' => 'sajid@gmail.com',
            'phon_number' => 01721252533,
            'image' => 'quiz/sajid.png',
            'password' => bcrypt('12345678')
        ]);





        User::create([
            'name' => 'yeamin',
            'role_id' => '2',
            'email' => 'yeamin@gmail.com',
            'phon_number' => 01721251533,
            'image' => 'quiz/yeamin.png',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'sagir',
            'role_id' => '2',
            'email' => 'sagir@gmail.com',
            'phon_number' => 01721251533,
            'image' => 'quiz/sagir.png',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'mahabub',
            'role_id' => '2',
            'email' => 'mahabub@gmail.com',
            'phon_number' => 01721252533,
            'image' => 'quiz/mahabub.png',
            'password' => bcrypt('12345678')
        ]);
    }
}
