# Back End Web Development Project

#### Nama  : I Wayan Bayu Tangkas Ariarta
#### NIM   : 220040246
#### Kelas : UG224
#### Mata Kuliah : Back End Web Development


## Latar Belakang

Aplikasi XYZ Sales API End Point adalah aplikasi web yang dirancang untuk mengelola data pelanggan, penjualan, dan pembelian. Aplikasi ini dibangun dengan struktur sistem yang terstruktur dengan baik, sehingga mudah dipahami dan dipertahankan. Dokumentasi ini memberikan pandangan yang lebih dalam tentang arsitektur, konfigurasi, dan alur kerja sistem.

## Struktur Direktori

### Direktori public
Direktori ini berisi titik masuk utama aplikasi, yaitu `index.php`. File ini menghandle permintaan HTTP dan mengarahkan permintaan tersebut ke controller yang sesuai berdasarkan jenis permintaan dan rute.

### Direktori src

#### -Controller
Direktori ini berisi controller yang bertanggung jawab menghandle permintaan terkait pelanggan, penjualan, dan pembelian. Setiap controller berinteraksi dengan model yang sesuai untuk mengambil atau memanipulasi data dari database.

#### -Model
Direktori ini berisi model yang bertanggung jawab menginteraksi dengan database. Setiap model memberikan fungsi untuk operasi CRUD (Create, Read, Update, Delete) pada data yang sesuai.

### Config
Direktori ini berisi file konfigurasi, termasuk `database.php`, yang mendefinisikan pengaturan koneksi database.

### Alur Kerja Sistem

1. Ketika pengguna mengakses aplikasi melalui browser atau klien HTTP lainnya, permintaan HTTP diterima oleh `index.php` di direktori `public`.
2. `index.php` memeriksa jenis permintaan HTTP (GET, POST, PUT, DELETE) dan rute yang diminta, kemudian mengarahkan permintaan tersebut ke controller yang sesuai.
3. Controller yang sesuai memproses permintaan, berinteraksi dengan model yang sesuai untuk mengambil atau memanipulasi data dari database.
4. Model membuat koneksi ke database menggunakan pengaturan koneksi yang terdapat di `database.php`.
5. Setelah data diperoleh atau dimanipulasi di database, controller mengembalikan respons yang sesuai kepada pengguna yang melakukan permintaan.


### Kesimpulan

Aplikasi XYZ Sales API End Point adalah sistem yang terstruktur dengan baik yang efektif mengelola data pelanggan, penjualan, dan pembelian. Struktur direktori, file konfigurasi, dan alur kerja yang mudah dipahami membuat aplikasi mudah dipahami dan dipertahankan. Dokumentasi ini memberikan pandangan yang lebih dalam tentang sistem, komponen, dan alur kerja, sehingga menjadi sumber yang berguna bagi pengembang, administrator, dan pengguna.

## Refleksi Diri: 
Dalam proyek ini, saya sebagai pemula bertugas membuat requirement specification dan desain backend sistem penjualan untuk perusahaan XYZ. Proyek ini memberikan saya kesempatan untuk mengembangkan keterampilan dan pengalaman dalam mengembangkan aplikasi web yang kompleks.

### Tantangan dan Kesulitan :
Dalam proyek ini, saya menghadapi beberapa tantangan dan kesulitan, seperti:
1.	Mengembangkan Struktur Direktori dan File: Saya menghadapi kesulitan dalam mengembangkan struktur direktori dan file yang sesuai dengan spesifikasi proyek. Namun, saya berhasil menyelesaikan masalah tersebut dengan mencari inspirasi dari contoh proyek lain dan mencoba beberapa cara untuk mengorganisir file dan direktori.
2.	Mengembangkan Kode Program: Saya menghadapi kesulitan dalam mengembangkan kode program yang sesuai dengan spesifikasi proyek. Namun, saya berhasil menyelesaikan masalah tersebut dengan mencari bantuan online, mencoba beberapa cara untuk mengembangkan kode, dan meminta bantuan dari rekan sejawat.

### Cara Mengatasinya:
Untuk mengatasinya, saya melakukan beberapa hal berikut:
1.	Mencari Bantuan Online: Saya mencari bantuan online melalui forum, blog, dan dokumentasi resmi dari MySQL dan PHP. Hal ini membantu saya menemukan solusi untuk masalah yang saya hadapi.
2.	Mencoba Beberapa Cara: Saya mencoba beberapa cara untuk mengimport file SQL dan mengembangkan struktur direktori dan file. Hal ini membantu saya menemukan solusi yang sesuai dengan kebutuhan proyek.
3.	Mengembangkan Keterampilan dan Pengalaman: Saya mengembangkan keterampilan dan pengalaman dalam mengembangkan aplikasi web yang kompleks. Hal ini membantu saya menyelesaikan masalah yang saya hadapi dan meningkatkan kualitas kode program.

