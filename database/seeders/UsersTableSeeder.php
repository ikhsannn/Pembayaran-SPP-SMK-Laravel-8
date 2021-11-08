<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::create([
            'role_id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Bendahara',
            'email' => 'bendahara@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Kepala Sekolah',
            'email' => 'kepalasekolah@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'role_id' => 4,
            'name' => 'Siswa',
            'email' => 'siswa@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
        ]);
        }
    }
}
