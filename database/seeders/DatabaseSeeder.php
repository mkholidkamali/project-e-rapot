<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
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
        Kelas::create([
            'guru_id' => 1,
            'kelas' => 'X Tel 1',
            'jurusan' => 'tra',
        ]);
        Kelas::create([
            'guru_id' => 2,
            'kelas' => 'XI Tel 2',
            'jurusan' => 'tja',
        ]);
        Kelas::create([
            'guru_id' => 3,
            'kelas' => 'XII Tel 3',
            'jurusan' => 'tkj',
        ]);
        Siswa::create([
            'kelas_id' => 1,
            'nis' => '20191234',
            'nisn' => '728198208',
            'nama' => 'Anthon Fajri',
            'jurusan' => 'tra',
            'jenis_kelamin' => 'l',
            'agama' => 'islam',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Siswa::create([
            'kelas_id' => 2,
            'nis' => '20195678',
            'nisn' => '928728188',
            'nama' => 'Britania Ramadhan',
            'jurusan' => 'tja',
            'jenis_kelamin' => 'l',
            'agama' => 'islam',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Siswa::create([
            'kelas_id' => 3,
            'nis' => '20199101',
            'nisn' => '123837493',
            'nama' => 'Chris Budiman',
            'jurusan' => 'tkj',
            'jenis_kelamin' => 'l',
            'agama' => 'kapro',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Mapel::create([
            'kelas' => 'x',
            'mapel' => 'Matematika',
            'jurusan' => 'rpl'
        ]);
        Mapel::create([
            'kelas' => 'xi',
            'mapel' => 'Bahasa Indonesia',
            'jurusan' => 'tkj'
        ]);
        Mapel::create([
            'kelas' => 'xii',
            'mapel' => 'Pemrograman Web',
            'jurusan' => 'tja'
        ]);
    }
}
