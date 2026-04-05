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
                'foto'      => 'perpustakaan.png', 
                'keterangan'=> 'Gali pengetahuan di salah satu perpustakaan terbesar Jawa Timur. Sebagai caring learning zone Perpustakaan UK Petra tak hanya berperan sebagai pusat informasi saja, tetapi ikut membentuk masyarakat belajar serta menjadi mitra profesional bagi masyarakat akademis dan praktisi tanpa batasan ruang dan waktu.',
                'url'       => 'https://library.petra.ac.id',
            ],
            [
                'nama'      => 'Layanan Kesehatan',
                'foto'      => 'layanankesehatan.png', 
                'keterangan'=> 'UK Petra menyediakan sejumlah layanan kesehatan umum dan gigi yang dapat diakses oleh Petranesian secara gratis maupun berbayar di Unit Klinik Pratama. Ingat, kamu diwajibkan untuk membawa Kartu Tanda Mahasiswa (KTM) yang masih berlaku; jika KTM tidak dibawa, maka kamu akan dianggap sebagai pasien biasa dan dikenakan biaya.',
                'url'       => 'https://petra.ac.id/facilities',
            ],
            [
                'nama'      => 'PTIK (Pusat Teknologi Informasi dan Komunikasi)',
                'foto'      => 'ptik.png', 
                'keterangan'=> 'Untuk mendukung kegiatan belajar, mengajar, dan penelitian, Petranesian aktif, staff, serta dosen tetap UK Petra dapat mengunduh berbagai perangkat lunak Microsoft melalui program OVS-ES dan MSDN-AA dengan mengikuti peraturan dan prosedur yang berlaku.',
                'url'       => 'https://ptik.petra.ac.id',
            ],
            [
                'nama'      => 'Petra Career Center',
                'foto'      => 'petracareercenter.png', 
                'keterangan'=> 'Petra Career Center ada untuk mempersiapkan Petranesian sebelum terjun ke dunia kerja melalui program-program onsite dan daring yang asik, seperti webinar, workshop, seminar, dan kamp. Pengenalan potensi karier untuk Petranesian juga diberikan melalui psikotes dan konsultasi karier. Tidak hanya itu, lulusan juga dihubungkan dengan perusahaan-perusahaan pencari tenaga kerja.',
                'url'       => 'https://alumni.petra.ac.id',
            ],
            [
                'nama'      => 'BAKA',
                'foto'      => 'baka.png', 
                'keterangan'=> 'Biro Administrasi Kemahasiswaan dan Alumni (BAKA) memiliki tugas dalam mengurus administrasi dan pengembangan kemahasiswaan dan kesejahteraan mahasiswa dan pendataan Alumni. Petranesian yang ingin mengecek SKKK, mencari informasi bantuan keuangan, maupun mengurus administrasi Lembaga Kemahasiswaan dapat mengakses layanan ini.',
                'url'       => 'https://sportfolio.petra.ac.id',
            ],
            [
                'nama'      => 'International Office (IO)',
                'foto'      => 'internationaloffice.png', 
                'keterangan'=> 'KUI atau International Office bertugas untuk mendukung dan meningkatkan pelayanan dan mutu pendidikan Petra melalui kerjasama dalam dan luar negeri. Di sini, bebas berkunjung dan berkonsultasi mengenai rencana mengikuti program internasional seperti Student Exchange (SE), Joint/Double Degree (JD/DD), dan Summer Program.',
                'url'       => 'https://io.petra.ac.id',
            ],
            [
                'nama'      => 'Kantin dan Toko',
                'foto'      => 'kantindantoko.png', 
                'keterangan'=> 'Dari makanan hingga perlengkapan perkuliahan, dapatkan kebutuhan-kebutuhanmu di sini. Tersedia berbagai fasilitas mulai dari Petra Book Store, Swalayan, hingga berbagai pilihan Kantin.',
                'url'       => 'https://petra.ac.id/facilities',
            ],
            [
                'nama'      => 'Pusat Kerohanian (PUSROH)',
                'foto'      => 'pusatkerohanian.png', 
                'keterangan'=> 'Pusat Kerohanian bertugas untuk memberikan layanan di bidang kerohanian kepada mahasiswa, dosen, dan tenaga kependidikan untuk mengembangkan wawasan dunia Kristen (Christian worldview) serta mendorong penerapan nilai-nilai kristiani (Christian values) sehingga dapat menolong pertumbuhan rohani yang diwujudkan dalam perilaku kristiani.',
                'url'       => 'https://petra.ac.id/facilities',
            ],
        ];

        foreach ($fasilitas as $item) {
            Fasilitas::create($item);
        }
    }
}