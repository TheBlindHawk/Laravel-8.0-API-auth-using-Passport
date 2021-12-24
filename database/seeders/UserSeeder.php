<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        User::query()->delete();

        $user = [
            'id' => 1,
            'nickname' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'gender' => 'other',
            'post_code' => '000-0000',
            'phone' => '000-0000-0000',
            'date_of_birth' => '2000/1/1',
        ];
        User::create($user);
        $user = [
            'id' => 2,
            'nickname' => 'EXuser',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'gender' => 'other',
            'post_code' => '000-0000',
            'phone' => '000-0000-0000',
            'date_of_birth' => '2000/1/1',
        ];
        User::create($user);
        $user = [
            'id' => 3,
            'nickname' => 'EXcreator',
            'email' => 'creator@example.com',
            'password' => Hash::make('password'),
            'gender' => 'other',
            'post_code' => '000-0000',
            'phone' => '000-0000-0000',
            'date_of_birth' => '2000/1/1',
        ];
        User::create($user);
    }
}
