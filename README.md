# Bimbingan Online

## Deskripsi Proyek

Bimbingan Online adalah sebuah website yang dirancang untuk menjadi sarana mahasiswa dalam proses berlangsungnya Tugas Akhir 1 (TA1) dan Tugas Akhir 2 (TA2). Website ini memungkinkan mahasiswa dan pembimbing untuk berinteraksi dan mengelola proses bimbingan secara efisien dan efektif.

## Fitur Utama

- **Pengelolaan Dokumen**: Memungkinkan upload dan download dokumen-dokumen penting TA.
- **Tracking Progress**: Mahasiswa dan pembimbing dapat melihat perkembangan tugas akhir.

## Teknologi yang Digunakan

Proyek ini dibangun menggunakan:

- **Bahasa Pemrograman**: PHP
- **Framework**: Laravel 10
- **Database**: MySQL (disarankan versi terbaru)

## Cara Penggunaan

Untuk menjalankan Bimbingan Online di lokal Anda, ikuti langkah-langkah berikut:

1. **Clone Repository**
    ```
    git clone -b dev-new https://github.com/inihikam/bimbingan-online-ta-kp.git
    cd bimbingan-online-ta-kp
    ```
2. **Install Dependencies**
    ```
    composer install
    ```
3. **Update Dependencies**
    ```
    composer update
    ```
4. **Konfigurasi Database**
    Buat file `.env` dari `.env.example`:
    ```
    cp .env.example .env
    ```
    Kemudian, edit file `.env` dan atur konfigurasi database Anda:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```
6. **Migrasi Database**
   Pastikan database kosong tanpa tabel, lebih baik jika belum ada databasenya. Kemudian, jalankan:
    ```
    php artisan migrate
    ```

7. **Seed Database**
   Seed database dengan data awal:
    ```
    php artisan db:seed --class=DatabaseSeeder
    php artisan db:seed --class=SeedUserRoles
    php artisan db:seed --class=SeedStatusMahasiswa
    ```
8. **Tinggal Jalankan Server lewat Laragon**

**Terima kasih telah mengunjungi repository Bimbingan Online!**
