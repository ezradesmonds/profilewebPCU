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

## 🚀 Cara Setup

### 1. Buat project Laravel 12 baru

```bash
composer create-project laravel/laravel petra-university "^12.0"
cd petra-university
```

### 2. Copy semua file dari repository ini

Salin semua file ke dalam project Laravel yang baru dibuat:

```
app/Http/Controllers/HomeController.php
app/Http/Controllers/FacilityController.php
app/Models/Fasilitas.php
database/migrations/2024_01_01_000001_create_fasilitas_table.php
database/seeders/FasilitasSeeder.php
database/seeders/DatabaseSeeder.php
resources/views/layouts/app.blade.php
resources/views/pages/home.blade.php
resources/views/pages/facility.blade.php
routes/web.php
```

### 3. Setup environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi database

**Opsi A — SQLite (termudah):**
```bash
touch database/database.sqlite
```
Di `.env` pastikan:
```
DB_CONNECTION=sqlite
```

**Opsi B — MySQL:**
Di `.env` isi:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=petra_university
DB_USERNAME=root
DB_PASSWORD=your_password
```
Buat database:
```sql
CREATE DATABASE petra_university;
```

### 5. Jalankan migration dan seeder

```bash
php artisan migrate
php artisan db:seed
```

### 6. Siapkan gambar

Letakkan semua gambar di `public/images/`:

```
public/
└── images/
    ├── home.jpg                  ← Wajib ada (hero image halaman Home)
    ├── perpustakaan.jpg
    ├── layanan-kesehatan.jpg
    ├── ptik.jpg
    ├── career-center.jpg
    ├── baka.jpg
    ├── international-office.jpg
    ├── kantin.jpg
    └── pusat-kerohanian.jpg
```

> **Catatan:** Jika gambar fasilitas tidak tersedia, card akan tetap tampil dengan fallback placeholder. Yang wajib ada hanya `home.jpg`.

### 7. Jalankan server

```bash
php artisan serve
```

Akses di: **http://localhost:8000**

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
