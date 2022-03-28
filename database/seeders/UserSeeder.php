<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function setUsername()
    {
        $i = 0;
        $username = $i . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        while (User::whereUsername($username)->exists()) {
            $i++;
            $username = $i . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        }
        return $username;
    }

    public function setInviteCode()
    {
        $i = 0;
        $code = $i . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        while (User::where($code)->exists()) {
            $i++;
            $code = $i . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        }
        return $code;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 20) as $key) {
            DB::table('users')->insert([
                'first_name' => 'f_' . $this->generateRandomString(7),
                'last_name' => 'l_' . $this->generateRandomString(7),
                'username' => 'u_' . $this->setUsername(),
                'invite_code' => 'code_' . $this->setInviteCode(),
                'email' => $this->generateRandomString(6) . '@' . $this->generateRandomString(4) . 'com',
                'email_verified_at' => now(),
                // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
