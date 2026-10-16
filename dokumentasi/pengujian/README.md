# Dokumentasi Pengujian

## Identitas

- **Nama:** Masita Khairunnissa
- **NIM:** 25012067
- **Kelas:** 25M31

## Hasil Pengujian

| ID | Langkah dan Input | Hasil yang Diharapkan | Hasil Aktual | Status | Bukti |
|---|---|---|---|---|---|
| U01 | Membuka halaman menu | Minimal 5 menu ditampilkan | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](01-daftar-menu.png) |
| U02a | Mencari menu Nasi Goreng | Menu yang sesuai ditampilkan | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U02a-pencarian-ditemukan.png) |
| U02b | Mencari menu Pizza | Pesan menu tidak ditemukan ditampilkan | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U02b-pencarian-kosong.png) |
| U03 | Menambahkan menu ke keranjang | Menu dan jumlah pesanan ditampilkan | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U03-keranjang-berisi.png) |
| U03a | Memasukkan jumlah kosong | Pesanan ditolak dan keranjang tetap | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U03a-jumlah-kosong.png) |
| U03b | Memasukkan jumlah negatif | Pesanan ditolak dan keranjang tetap | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U03b-jumlah-negatif.png) |
| U03c | Memasukkan jumlah pecahan | Pesanan ditolak dan keranjang tetap | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U03c-jumlah-pecahan.png) |
| U03d | Memasukkan jumlah 0 | Pesanan ditolak dan keranjang tetap | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U03d-jumlah-nol.png) |
| U03e | Memasukkan jumlah 11 | Pesanan ditolak karena melewati batas | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U03e-jumlah-maksimal.png) |
| U04 | Memasukkan kode menu yang tidak valid | Sistem menolak kode menu dan menampilkan pesan yang sesuai | Isi setelah diuji | Belum diuji | Belum tersedia |
| U05a | Menambahkan pesanan hingga jumlah gabungan 10 | Jumlah pesanan menjadi 10 | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U05a-jumlah-total-10.png) |
| U05b | Menambahkan pesanan hingga melebihi 10 | Penambahan ditolak dan jumlah tetap | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U05b-jumlah-melebihi-batas.png) |
| U06 | Melakukan refresh dan berpindah halaman | Data keranjang tetap tersimpan | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U06-session-keranjang.png) |
| U07 | Melakukan POST lalu refresh halaman | Pesanan tidak ditambahkan ulang dan pesan hanya muncul sekali | Isi sesuai hasil pengujian | Belum diuji | [Screenshot](U07-redirect-refresh.png) |
| U08a | Memeriksa subtotal sebelum diskon | Subtotal dihitung sesuai harga dan jumlah pesanan | Isi setelah diuji | Belum diuji | Belum tersedia |
| U08b | Memeriksa diskon dan total akhir | Diskon dan total akhir dihitung sesuai ketentuan aplikasi | Isi setelah diuji | Belum diuji | Belum tersedia |
| U09a | Menghapus menu dari keranjang | Menu terhapus dari keranjang | Isi setelah diuji | Belum diuji | Belum tersedia |
| U09b | Mengosongkan seluruh keranjang | Keranjang menjadi kosong | Isi setelah diuji | Belum diuji | Belum tersedia |
| U10 | Memeriksa cookie kategori | Pilihan kategori tersimpan sesuai pengaturan cookie | Isi setelah diuji | Belum diuji | Belum tersedia |
| U11 | Memasukkan teks HTML pada input | Input ditampilkan dengan aman dan tidak dieksekusi sebagai HTML | Isi setelah diuji | Belum diuji | Belum tersedia |

## Catatan Perbaikan

- Hasil aktual dicatat berdasarkan pengujian aplikasi.
- Status **Lulus** diberikan jika hasil aktual sesuai dengan hasil yang diharapkan.
- Status **Gagal** diberikan jika hasil aktual tidak sesuai dengan hasil yang diharapkan.
- Status **Belum diuji** digunakan jika pengujian belum dilakukan.
- Jika ditemukan kesalahan, lakukan perbaikan dan pengujian ulang.
- Bukti screenshot ditambahkan setelah pengujian dilakukan.

## Kesimpulan

Dokumentasi ini digunakan untuk mencatat pengujian aplikasi pemesanan makanan dan minuman kantin, meliputi tampilan menu, pencarian, validasi jumlah pesanan, keranjang belanja, perhitungan subtotal dan diskon, session, redirect, cookie, serta keamanan input. Kesimpulan akhir ditentukan berdasarkan hasil pengujian yang telah dilakukan.