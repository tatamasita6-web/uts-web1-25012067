# Dokumentasi Pengujian

## Identitas

- Nama: Masita Khairunnissa
- NIM: 25012067
- Kelas: 25M31

## Hasil Pengujian

| ID | Langkah dan Input | Hasil yang Diharapkan | Hasil Aktual | Status | Bukti |
|---|---|---|---|---|---|
| U01 | Buka halaman menu | Minimal 5 menu tampil | Isi setelah diuji | Lulus/Gagal | [Screenshot](01-daftar-menu.png) |
| U02a | Cari Nasi Goreng | Menu yang sesuai tampil | Isi setelah diuji | Lulus/Gagal | [Screenshot](U02a-pencarian-ditemukan.png) |
| U02b | Cari Pizza | Pesan tidak ditemukan | Isi setelah diuji | Lulus/Gagal | [Screenshot](U02b-pencarian-kosong.png) |
| U03 | Tambahkan menu ke keranjang | Menu dan jumlah pesanan tampil di keranjang | Isi setelah diuji | Lulus/Gagal | [Screenshot](U03-keranjang-berisi.png) |
| U03a | Jumlah kosong | Pesanan ditolak dan keranjang tetap | Isi setelah diuji | Lulus/Gagal | [Screenshot](U03a-jumlah-kosong.png) |
| U03b | Jumlah negatif | Pesanan ditolak dan keranjang tetap | Isi setelah diuji | Lulus/Gagal | [Screenshot](U03b-jumlah-negatif.png) |
| U03c | Jumlah pecahan | Pesanan ditolak dan keranjang tetap | Isi setelah diuji | Lulus/Gagal | [Screenshot](U03c-jumlah-pecahan.png) |
| U03d | Jumlah 0 | Pesanan ditolak dan keranjang tetap | Isi setelah diuji | Lulus/Gagal | [Screenshot](U03d-jumlah-nol.png) |
| U03e | Jumlah 11 | Pesanan ditolak dan keranjang tetap | Isi setelah diuji | Lulus/Gagal | [Screenshot](U03e-jumlah-maksimal.png) |
| U05a | Jumlah gabungan tepat 10 | Jumlah menjadi 10 | Isi setelah diuji | Lulus/Gagal | [Screenshot](U05a-jumlah-total-10.png) |
| U05b | Penambahan melewati 10 | Penambahan ditolak dan jumlah tetap | Isi setelah diuji | Lulus/Gagal | [Screenshot](U05b-jumlah-melebihi-batas.png) |
| U06 | Refresh dan pindah halaman | Keranjang tetap tersedia | Isi setelah diuji | Lulus/Gagal | [Screenshot](U06-session-keranjang.png) |
| U07 | POST lalu refresh | Pesanan tidak ditambahkan ulang dan flash message hanya muncul sekali | Isi setelah diuji | Lulus/Gagal | [Screenshot](U07-redirect-refresh.png) |

## Catatan Perbaikan

- Hasil aktual dicatat berdasarkan hasil pengujian website.
- Status pengujian ditentukan berdasarkan kesesuaian hasil aktual dengan hasil yang diharapkan.
- Pengujian yang belum dilakukan akan dilanjutkan.
- Jika ditemukan kesalahan, lakukan perbaikan dan pengujian ulang.

## Kesimpulan

Dokumentasi ini berisi bukti pengujian halaman menu, pencarian, keranjang belanja, validasi jumlah pesanan, batas maksimal pesanan, session, dan redirect. Pengujian lanjutan dilakukan sesuai fitur yang tersedia pada aplikasi.