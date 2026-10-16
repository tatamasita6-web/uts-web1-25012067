# UTS Pemrograman Web I

## Identitas Mahasiswa

- **Nama:** Masita Khairunnissa
- **NIM:** 25012067
- **Kelas:** 25M31

## Deskripsi Project

Aplikasi pemesanan makanan dan minuman kantin yang dibuat menggunakan PHP Native. Aplikasi ini membantu pengguna melihat menu, mencari makanan, dan mengelola pesanan melalui keranjang belanja.

## Fitur Aplikasi

1. Menampilkan daftar menu makanan dan minuman.
2. Mencari menu berdasarkan kata kunci.
3. Memvalidasi kode menu dan jumlah pesanan.
4. Menyimpan keranjang belanja menggunakan session.
5. Menghitung subtotal, diskon, dan total pembayaran sesuai ketentuan aplikasi.
6. Menggunakan redirect dan flash message setelah proses pesanan.
7. Menyimpan pilihan kategori menggunakan cookie jika fitur tersedia.

## Teknologi yang Digunakan

- PHP Native
- HTML
- CSS
- Session
- Cookie
- Git dan GitHub

## Cara Menjalankan Aplikasi

1. Instal dan jalankan XAMPP.
2. Aktifkan Apache.
3. Simpan folder project di dalam direktori `htdocs`.
4. Buka browser.
5. Akses alamat berikut:

   `http://localhost/web1/uts-web1-25012067/`

## Struktur Folder

- `assets/` — menyimpan file CSS.
- `data/` — menyimpan data menu.
- `includes/` — menyimpan file fungsi, header, dan footer.
- `dokumentasi/pengujian/` — menyimpan dokumentasi pengujian.
- `index.php` — halaman utama dan daftar menu.
- `keranjang.php` — halaman keranjang belanja.
- `proses.php` — memproses pesanan.

## Dokumentasi Pengujian

Dokumentasi hasil pengujian dan bukti screenshot tersedia di folder `dokumentasi/pengujian/`.

## Repository GitHub

[UTS Web I - 25012067](https://github.com/tatamasita6-web/uts-web1-25012067)

## Kesimpulan

Project ini dibuat untuk menerapkan materi Pemrograman Web I menggunakan PHP Native, termasuk pengolahan form, validasi input, session, cookie, dan pengelolaan keranjang belanja.

## Alur Kerja Aplikasi

1. Pengguna membuka halaman utama untuk melihat daftar menu.
2. Pengguna mencari menu yang diinginkan.
3. Pengguna memilih menu dan memasukkan jumlah pesanan.
4. Sistem memvalidasi data pesanan.
5. Pesanan yang valid disimpan ke keranjang menggunakan session.
6. Sistem menghitung subtotal dan diskon sesuai ketentuan aplikasi.
7. Pengguna dapat melihat dan mengelola isi keranjang.

## Pengujian Aplikasi

Pengujian dilakukan untuk memeriksa tampilan menu, fitur pencarian, validasi jumlah pesanan, keranjang belanja, session, dan redirect. Bukti serta dokumentasi pengujian disimpan dalam folder `dokumentasi/pengujian/`.