PENJELASAN MINI SISTEM INFORMASI MAHASISWA

1. Penjelasan Route ('web.php')
File 'web.php' digunakan untuk mengatur URL yang ada di aplikasi. Jadi, ketika pengguna membuka URL tertentu, Laravel akan menentukan halaman atau Controller mana yang dijalankan.
Route '/', '/tentang', dan '/kontak' langsung mengarah ke view. Sedangkan '/profil', '/mahasiswa', '/mahasiswa/{nim}', dan '/dashboard' mengarah ke method pada Controller. '->name()' digunakan supaya route bisa dipanggil dengan 'route()' di Blade.

---
2. Penjelasan 'MahasiswaController'
'MahasiswaController' digunakan untuk mengatur data dan halaman yang berhubungan dengan mahasiswa. Data mahasiswa disimpan dalam array karena aplikasi ini belum menggunakan database.
Function 'dataMahasiswa()' berisi data lima mahasiswa dan dibuat sebagai function supaya datanya bisa digunakan kembali. 'profil()' digunakan untuk menampilkan data profil, sedangkan 'index()' digunakan untuk menampilkan seluruh data mahasiswa.
'show($nim)' digunakan untuk mencari mahasiswa berdasarkan NIM yang ada di URL. Kalau NIM ditemukan, data ditampilkan di halaman detail. Kalau tidak ditemukan, akan muncul error 404 menggunakan 'abort(404)'.

---
3. Penjelasan 'DashboardController'
'DashboardController' digunakan untuk mengirim data yang akan ditampilkan pada Dashboard.
Nilai '$totalMahasiswa', '$totalAktif', dan '$totalCuti' dibuat di Controller, kemudian dikirim ke 'dashboard.blade.php' menggunakan 'compact()'. Setelah itu, nilainya dapat ditampilkan menggunakan '{{ $totalMahasiswa }}', '{{ $totalAktif }}', dan '{{ $totalCuti }}'.

---
4. Penjelasan Blade Template
Blade digunakan untuk membuat tampilan halaman pada Laravel.
'@extends('layouts.app')' digunakan supaya halaman menggunakan layout utama. '@section()' digunakan untuk mengisi bagian tertentu pada layout, sedangkan '@yield()' menjadi tempat untuk menampilkan isi dari '@section()'.
'{{ }}' digunakan untuk menampilkan data, sedangkan '@foreach' digunakan untuk melakukan perulangan, misalnya saat menampilkan daftar mahasiswa.

---
5. Penjelasan Blade Component 'Kartu'
'Kartu' digunakan untuk membuat card pada Dashboard supaya struktur card tidak perlu ditulis berulang kali.
'$judul' digunakan untuk menampilkan judul card. '$slot' digunakan untuk menampilkan isi yang ada di dalam '<x-kartu>'. Jika menggunakan '<x-slot:footer>', isinya akan ditampilkan melalui '$footer'.

---
6. Alur Kerja
Alurnya dimulai ketika pengguna membuka URL. Laravel akan mencocokkannya dengan route di 'web.php', kemudian route menjalankan Controller atau langsung membuka View.
Jika menggunakan Controller, Controller menyiapkan data lalu mengirimkannya ke Blade untuk ditampilkan.
Browser -> Route -> Controller -> View -> Browser
Aplikasi ini menggunakan data dalam bentuk array sehingga belum menggunakan database.