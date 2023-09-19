<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=new User();
        $user->first_name='Martin';
        $user->last_name='Yordanov';
        $user->phone='088888897';
        $user->birth_date=now();
        $user->email='admin@weband.bg';
        $user->password=bcrypt('123456');

        $user->save();
    }
}
