<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'name' => 'Testing',
            'email' => 'testing@testing.com',
            'password' => bcrypt('12345678'),
        ]);
        Guru::create([
            'no_induk' => '919282992823',
            'name' => 'Anthonio',
            'jenis_kelamin' => 'l',
            'foto' => 'testing.jpg'
        ]);
        Guru::create([
            'no_induk' => '829281192282',
            'name' => 'Brando',
            'jenis_kelamin' => 'p',
            'foto' => 'testing.jpg'
        ]);
        Guru::create([
            'no_induk' => '271812912828',
            'name' => 'Chris',
            'jenis_kelamin' => 'l',
            'foto' => 'testing.jpg'
        ]);
    }
}
