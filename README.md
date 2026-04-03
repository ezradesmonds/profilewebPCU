# 🎓 Universitas Kristen Petra — Website Profil

Website profil Universitas Kristen Petra dibuat dengan Laravel 12 + Tailwind CSS CDN.

---

## ✅ Spesifikasi yang Dipenuhi

| # | Spesifikasi | Status |
|---|---|---|
| 1 | Tailwind CSS + Responsive | ✅ Via CDN |
| 2 | Navbar: Home & Facility | ✅ |
| 3 | Route `/` → Home page | ✅ |
| 3a | Hero image `home.jpg` full width | ✅ |
| 3b | Deskripsi universitas | ✅ |
| 4 | Route `/facility` → Facility page | ✅ |
| 4a | Data dari tabel `fasilitas` | ✅ |
| 4b | Migration: `id, nama, foto, keterangan, url` | ✅ |
| 4c | Seeder dari data petra.ac.id/facilities | ✅ |
| 4d | Card dengan nama, foto, keterangan | ✅ |
| 4e | Ganjil: gambar kanan / Genap: gambar kiri | ✅ |

---

## 📁 Struktur File

```
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   └── FacilityController.php
│   └── Models/
│       └── Fasilitas.php
├── database/
│   ├── migrations/
│   │   └── 2024_01_01_000001_create_fasilitas_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── FasilitasSeeder.php
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php          ← Main layout + Navbar + Footer
│   └── pages/
│       ├── home.blade.php         ← Route "/"
│       └── facility.blade.php     ← Route "/facility"
├── routes/
│   └── web.php
└── public/
    └── images/                    ← Letakkan semua gambar di sini
```

---

## 🎨 Design Decisions

- **Font:** Playfair Display (display) + Plus Jakarta Sans (body) via Google Fonts
- **Warna:** Biru Petra (`#003DA5`) + Gold (`#F5A623`) + Dark (`#0A1628`)
- **Tailwind:** Via CDN dengan custom config `tailwind.config`
- **Responsive:** Grid/flex yang collapse ke kolom tunggal di mobile
- **Alternating cards:** Menggunakan `($index + 1) % 2 !== 0` untuk logika ganjil/genap
- **Image fallback:** `onerror` handler agar halaman tetap rapi meskipun gambar belum ada

---

## 🔧 Commands Cheat Sheet

```bash
# Fresh install (hapus semua data lama)
php artisan migrate:fresh --seed

# Hanya seed ulang
php artisan db:seed

# Lihat semua routes
php artisan route:list
```
