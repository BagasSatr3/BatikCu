<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use App\Models\User;//model table users

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'admin';
        $inputan['email'] = 'admin1@gmail.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('12345678');//passwordnya 123258
        $inputan['phone'] = '08826784126';
        $inputan['alamat'] = 'malang';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);

    }
}