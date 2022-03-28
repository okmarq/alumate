<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => 'f_' . $this->generateRandomString(7),
            'last_name' => 'l_' . $this->generateRandomString(7),
            'username' => 'u_' . $this->setUsername(),
            'invite_code' => 'code_' . $this->setInviteCode(),
            'email' => $this->generateRandomString(6) . '@' . $this->generateRandomString(4) . 'com',
            'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
