<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fasilitas;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $fasilitas = [
            [
                'nama'      => 'Perpustakaan',
                'foto'      => 'perpustakaan.jpg',
                'keterangan'=> 'Gali pengetahuan di salah satu perpustakaan terbesar Jawa Timur. Sebagai caring learning zone, Perpustakaan UK Petra tak hanya berperan sebagai pusat informasi saja, tetapi ikut membentuk masyarakat belajar serta menjadi mitra profesional bagi masyarakat akademis dan praktisi tanpa batasan ruang dan waktu.',
                'url'       => 'https://library.petra.ac.id',
            ],
            [
                'nama'      => 'Layanan Kesehatan',
                'foto'      => 'layanan-kesehatan.jpg',
                'keterangan'=> 'UK Petra menyediakan layanan kesehatan bagi civitas akademika berupa poliklinik yang dilengkapi dengan tenaga medis profesional. Layanan ini mencakup pemeriksaan kesehatan umum, konsultasi dokter, dan pertolongan pertama untuk mendukung kesejahteraan mahasiswa dan karyawan.',
                'url'       => 'https://petra.ac.id/facilities',
            ],
            [
                'nama'      => 'PTIK (Pusat Teknologi Informasi dan Komunikasi)',
                'foto'      => 'ptik.jpg',
                'keterangan'=> 'PTIK UK Petra mengelola infrastruktur teknologi informasi kampus, termasuk jaringan internet berkecepatan tinggi, sistem informasi akademik, dan berbagai layanan digital yang mendukung proses belajar mengajar serta operasional kampus secara menyeluruh.',
                'url'       => 'https://ptik.petra.ac.id',
            ],
            [
                'nama'      => 'Petra Career Center',
                'foto'      => 'career-center.jpg',
                'keterangan'=> 'Petra Career Center hadir sebagai jembatan antara mahasiswa dan dunia kerja. Melalui berbagai program seperti career fair, pelatihan soft skill, konseling karier, dan job placement, PCC membantu mahasiswa dan alumni untuk menemukan dan meraih peluang karier terbaik mereka.',
                'url'       => 'https://career.petra.ac.id',
            ],
            [
                'nama'      => 'BAKA (Biro Administrasi Kemahasiswaan dan Alumni)',
                'foto'      => 'baka.jpg',
                'keterangan'=> 'BAKA melayani berbagai kebutuhan administratif mahasiswa, mulai dari kegiatan kemahasiswaan, beasiswa, konseling, hingga urusan alumni. BAKA berkomitmen mendukung pengembangan diri mahasiswa secara holistik di luar kegiatan akademik.',
                'url'       => 'https://petra.ac.id/facilities',
            ],
            [
                'nama'      => 'International Office (IO)',
                'foto'      => 'international-office.jpg',
                'keterangan'=> 'International Office UK Petra memfasilitasi program internasionalisasi kampus, termasuk program pertukaran pelajar, kunjungan akademik ke luar negeri, penerimaan mahasiswa asing, serta kerja sama dengan lebih dari 150 mitra internasional di seluruh dunia.',
                'url'       => 'https://io.petra.ac.id',
            ],
            [
                'nama'      => 'Kantin dan Toko',
                'foto'      => 'kantin.jpg',
                'keterangan'=> 'Tersedia berbagai pilihan kantin dan toko yang tersebar di seluruh area kampus UK Petra. Menyajikan aneka makanan dan minuman berkualitas dengan harga terjangkau, serta toko kebutuhan sehari-hari, alat tulis, dan merchandise resmi universitas.',
                'url'       => 'https://petra.ac.id/facilities',
            ],
            [
                'nama'      => 'Pusat Kerohanian (PU)',
                'foto'      => 'pusat-kerohanian.jpg',
                'keterangan'=> 'Pusat Kerohanian UK Petra menyelenggarakan berbagai kegiatan rohani dan pembinaan karakter berbasis nilai-nilai kristiani. Fasilitas ini mendukung pertumbuhan spiritual seluruh sivitas akademika melalui ibadah, retret, konseling pastoral, dan komunitas rohani yang aktif.',
                'url'       => 'https://petra.ac.id/facilities',
            ],
        ];

        foreach ($fasilitas as $item) {
            Fasilitas::create($item);
        }
    }
}
