<?php

namespace Database\Seeders;

use App\Models\SchoolProfile;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Hadi',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'role' => 'Admin',
        ]);
        User::create([
            'nama' => 'Oki',
            'username' => 'operator',
            'password' => bcrypt('operator123'),
            'role' => 'Operator',
        ]);
        SchoolProfile::create([
            'nama_sekolah'   => 'SMA Negeri 6 Jakarta',
            'kepala_sekolah' => 'Drs. Budi Santoso, M.Pd.',
            'foto'           => 'default-foto.jpg',
            'logo'           => 'default-logo.png',
            'alamat'         => 'Jl. Raya Jakarta No.123, Jakarta Selatan',
            'kontak'         => '081234567890',
            'visi_misi'      => 'Menjadi sekolah unggulan dalam prestasi akademik, non-akademik, dan berkarakter.',
            'tahun_berdiri'  => '1985',
            'deskripsi'      => 'SMA Negeri 6 Jakarta adalah salah satu sekolah favorit dengan fasilitas lengkap dan tenaga pengajar profesional.',
        ]);
    }
}
