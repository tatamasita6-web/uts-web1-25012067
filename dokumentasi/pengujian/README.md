# Dokumentasi Pengujian

## Identitas

- **Nama:** Masita Khairunnissa
- **NIM:** 25012067
- **Kelas:** 25M31

## Hasil Pengujian

| ID | Langkah dan Input | Hasil yang Diharapkan | Hasil Aktual | Status | Bukti |
|---|---|---|---|---|---|
| U01 | Membuka halaman menu | Minimal 5 menu ditampilkan | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](01-daftar-menu.png) |
| U02a | Mencari menu Nasi Goreng | Menu yang sesuai ditampilkan | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U02a-pencarian-ditemukan.png) |
| U02b | Mencari menu Pizza | Pesan menu tidak ditemukan ditampilkan | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U02b-pencarian-kosong.png) |
| U03 | Menambahkan menu ke keranjang | Menu dan jumlah pesanan ditampilkan | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U03-keranjang-berisi.png) |
| U03a | Memasukkan jumlah kosong | Pesanan ditolak dan keranjang tetap | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U03a-jumlah-kosong.png) |
| U03b | Memasukkan jumlah negatif | Pesanan ditolak dan keranjang tetap | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U03b-jumlah-negatif.png) |
| U03c | Memasukkan jumlah pecahan | Pesanan ditolak dan keranjang tetap | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U03c-jumlah-pecahan.png) |
| U03d | Memasukkan jumlah 0 | Pesanan ditolak dan keranjang tetap | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U03d-jumlah-nol.png) |
| U03e | Memasukkan jumlah 11 | Pesanan ditolak karena melewati batas | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U03e-jumlah-maksimal.png) |
| U05a | Menambahkan pesanan hingga jumlah gabungan 10 | Jumlah pesanan menjadi 10 | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U05a-jumlah-total-10.png) |
| U05b | Menambahkan pesanan hingga melebihi 10 | Penambahan ditolak dan jumlah tetap | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U05b-jumlah-melebihi-batas.png) |
| U06 | Melakukan refresh dan berpindah halaman | Data keranjang tetap tersimpan | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U06-session-keranjang.png) |
| U07 | Melakukan POST lalu refresh halaman | Pesanan tidak ditambahkan ulang dan pesan hanya muncul sekali | Isi sesuai hasil pengujian | Lulus/Gagal | [Screenshot](U07-redirect-refresh.png) |

## Catatan Perbaikan

- Hasil aktual dicatat berdasarkan pengujian aplikasi.
- Status **Lulus** diberikan jika hasil aktual sesuai dengan hasil yang diharapkan.
- Status **Gagal** diberikan jika hasil aktual tidak sesuai dengan hasil yang diharapkan.
- Pengujian yang belum dilakukan akan dilanjutkan.
- Kesalahan yang ditemukan akan diperbaiki dan diuji kembali.

## Kesimpulan

Dokumentasi ini digunakan untuk mencatat hasil pengujian aplikasi pemesanan makanan dan minuman kantin, meliputi tampilan menu, pencarian, validasi jumlah pesanan, keranjang belanja, session, dan redirect. Hasil akhir ditentukan berdasarkan pengujian yang telah dilakukan.