<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Semester;
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
            'is_admin' => true
        ]);
        Guru::create([
            'no_induk' => '919282992823',
            'name' => 'Anthonio',
            'jenis_kelamin' => 'l',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Guru::create([
            'no_induk' => '829281192282',
            'name' => 'Brando',
            'jenis_kelamin' => 'p',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Guru::create([
            'no_induk' => '271812912828',
            'name' => 'Chris',
            'jenis_kelamin' => 'l',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Guru::create([
            'no_induk' => '1234567890',
            'name' => 'Gema',
            'jenis_kelamin' => 'l',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Guru::create([
            'no_induk' => '1234567891',
            'name' => 'Gita',
            'jenis_kelamin' => 'l',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Guru::create([
            'no_induk' => '1234567892',
            'name' => 'Tara',
            'jenis_kelamin' => 'l',
            'foto' => 'profile/guru/profile.webp'
        ]);
        Kelas::create([
            'guru_id' => 1,
            'kelas' => 'X Tel 1',
            'jurusan' => 'tra',
        ]);
        Kelas::create([
            'guru_id' => 2,
            'kelas' => 'X Tel 2',
            'jurusan' => 'tja',
        ]);
        Kelas::create([
            'guru_id' => 3,
            'kelas' => 'X Tel 3',
            'jurusan' => 'tkj',
        ]);
        Siswa::create([
            'kelas_id' => 1,
            'absen' => 1,
            'nis' => '20191234',
            'nisn' => '728198208',
            'nama' => 'Anthon Fajri',
            'jenis_kelamin' => 'l',
            'agama' => 'islam',
            'foto' => 'profile/guru/profile.webp',
            'tahun_ajaran' => '2022 / 2023',
        ]);
        Siswa::create([
            'kelas_id' => 2,
            'absen' => 1,
            'nis' => '20195678',
            'nisn' => '928728188',
            'nama' => 'Britania Ramadhan',
            'jenis_kelamin' => 'l',
            'agama' => 'islam',
            'foto' => 'profile/guru/profile.webp',
            'tahun_ajaran' => '2022 / 2023',
        ]);
        Siswa::create([
            'kelas_id' => 3,
            'absen' => 1,
            'nis' => '20199101',
            'nisn' => '123837493',
            'nama' => 'Chris Budiman',
            'jenis_kelamin' => 'l',
            'agama' => 'kapro',
            'foto' => 'profile/guru/profile.webp',
            'tahun_ajaran' => '2022 / 2023',
        ]);
        Mapel::create([
            'guru_id' => 1,
            'kelas' => 'x',
            'mapel' => 'Matematika',
            'jurusan' => 'tra'
        ]);
        Mapel::create([
            'guru_id' => 2,
            'kelas' => 'x',
            'mapel' => 'Matematika Terapan',
            'jurusan' => 'tra'
        ]);
        Mapel::create([
            'guru_id' => 3,
            'kelas' => 'xi',
            'mapel' => 'Bahasa Indonesia',
            'jurusan' => 'tkj'
        ]);
        Mapel::create([
            'guru_id' => 4,
            'kelas' => 'xi',
            'mapel' => 'Bahasa Inggris',
            'jurusan' => 'tkj'
        ]);
        Mapel::create([
            'guru_id' => 5,
            'kelas' => 'xii',
            'mapel' => 'Pemrograman Web',
            'jurusan' => 'rpl'
        ]);
        Mapel::create([
            'guru_id' => 6,
            'kelas' => 'xii',
            'mapel' => 'Pemrograman Database',
            'jurusan' => 'rpl'
        ]);
        Semester::create([
            'semester' => 'Ganjil',
        ]);
        Semester::create([
            'semester' => 'Genap',
        ]);
    }
}
