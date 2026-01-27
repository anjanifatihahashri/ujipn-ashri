<?php

namespace Database\Seeders;

use App\Models\Aspirasi;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'nama' => 'Slamet Kuatno, S.pd',
                'username' => 'slametkuatno',
                'email' => 'slametkuatno@gmail.com',
                'jabatan' => 'Waka Sarpras',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ],
            [
                'nama' => 'Ashri Fanjani',
                'username' => 'ashrifanjani',
                'email' => 'ashrifanjani@gmail.com',
                'jabatan' => '',
                'password' => bcrypt('123456'),
                'role' => 'siswa'
            ],
        ];

        foreach ($dataUser as $user) {
            User::create($user);
        }

        $dataSiswa = [
            [
                'user_id' => 2,
                'nis' => '12345678',
                'kelas' => '12 RPL',
                'jurusan' => 'PPLG'
            ],
        ];
        foreach ($dataSiswa as $siswa) {
            Siswa::create($siswa);
        }

        $dataKategori = [
            [
                'nama_kategori' => 'Ruang Kelas',
                'deskripsi' => 'Saran dan prasarana Ruang Kelas Siswa',
            ],
            [
                'nama_kategori' => 'Toilet',
                'deskripsi' => 'Saran dan prasarana kamar mandi/toilet siswa',
            ],
            [
                'nama_kategori' => 'Sekolah',
                'deskripsi' => 'Saran dan prasarana sekolah',
            ],
            [
                'nama_kategori' => 'Laboratorium Komputer',
                'deskripsi' => 'Saran dan prasarana Laboratorium Komputer sekolah',
            ],
        ];
        foreach ($dataKategori as $kategori) {
            Kategori::create($kategori);
        }

        $dataAspirasi =  [
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Ac kurang dingin',
                'isi' => 'Mohon di cek, AC di kelas 12 RPL mati',
                'status' => 'menunggu',
            ],
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Lampu mati',
                'isi' => 'Mohon di cek, Lampu di kelas 12 RPL mati',
                'status' => 'diproses',
            ],
            [
                'siswa_id' => 1,
                'kategori_id' => 1,
                'judul' => 'Bangku Kurang',
                'isi' => 'Mohon di cek,  di kelas 12 RPL mati',
                'status' => 'diproses',
            ],
            [
                'siswa_id' => 1,
                'kategori_id' => 2,
                'judul' => 'Toilet Mampat',
                'isi' => 'Mohon di cek, Toilet perempuan di No 2, Saluran Airnya mampat',
                'status' => 'selesai',
            ],
        ];
        foreach ($dataAspirasi as $aspirasi) {
            Aspirasi::create($aspirasi);
    }
}
}
