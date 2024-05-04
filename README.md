## Back End Web Development Project

#### Nama  : I Wayan Bayu Tangkas Ariarta
#### NIM   : 220040246
#### Kelas : UG224
#### Mata Kuliah : Back End Web Development

Pengembangan Dokumentasi XYZ Sales API End Point

Ringkasan dan Latar Belakang
Aplikasi XYZ Sales API End Point adalah aplikasi web yang dirancang untuk mengelola data pelanggan, penjualan, dan pembelian. Aplikasi ini dibangun dengan struktur sistem yang terstruktur dengan baik, sehingga mudah dipahami dan dipertahankan. Dokumentasi ini memberikan pandangan yang lebih dalam tentang arsitektur, konfigurasi, dan alur kerja sistem.

Struktur Direktori
Struktur direktori sistem adalah sebagai berikut:
•	public: Direktori ini berisi titik masuk utama aplikasi, yaitu index.php. File ini menghandle permintaan HTTP dan mengarahkan permintaan tersebut ke controller yang sesuai berdasarkan jenis permintaan dan rute.
•	src: Direktori ini berisi kode sumber aplikasi, yang dibagi menjadi subdirektori:
•	Controller: Direktori ini berisi controller yang bertanggung jawab menghandle permintaan terkait pelanggan, penjualan, dan pembelian. Setiap controller berinteraksi dengan model yang sesuai untuk mengambil atau memanipulasi data dari database.
•	Model: Direktori ini berisi model yang bertanggung jawab menginteraksi dengan database. Setiap model memberikan fungsi untuk operasi CRUD (Create, Read, Update, Delete) pada data yang sesuai.
•	config: Direktori ini berisi file konfigurasi, termasuk database.php, yang mendefinisikan pengaturan koneksi database.

Alur Kerja Sistem
Berikut adalah ringkasan alur kerja sistem:
1.	Ketika pengguna mengakses aplikasi melalui browser atau klien HTTP lainnya, permintaan HTTP diterima oleh index.php di direktori public.
2.	index.php memeriksa jenis permintaan HTTP (GET, POST, PUT, DELETE) dan rute yang diminta, kemudian mengarahkan permintaan tersebut ke controller yang sesuai.
3.	Controller yang sesuai memproses permintaan, berinteraksi dengan model yang sesuai untuk mengambil atau memanipulasi data dari database.
4.	Model membuat koneksi ke database menggunakan pengaturan koneksi yang terdapat di database.php.
5.	Setelah data diperoleh atau dimanipulasi di database, controller mengembalikan respons yang sesuai kepada pengguna yang melakukan permintaan.

Manfaat
Struktur sistem yang terstruktur dengan baik dan alur kerja yang mudah dipahami memberikan beberapa manfaat, termasuk:
•	Mudah Dipahami dan Dipertahankan: Struktur direktori dan file yang terorganisir dengan jelas membuat aplikasi mudah dipahami dan dipertahankan.
•	Keamanan yang Ditingkatkan: Pembagian tugas antara controller, model, dan file konfigurasi membantu menjaga keamanan dan integritas data saat operasi CRUD dilakukan.
•	Pengalaman Pengguna yang Lebih Baik: Aplikasi dapat merespons dengan cepat dan akurat terhadap setiap permintaan yang diterima, sehingga pengguna dapat memiliki pengalaman yang lebih baik.


Kesimpulan
Aplikasi XYZ Sales API End Point adalah sistem yang terstruktur dengan baik yang efektif mengelola data pelanggan, penjualan, dan pembelian. Struktur direktori, file konfigurasi, dan alur kerja yang mudah dipahami membuat aplikasi mudah dipahami dan dipertahankan. Dokumentasi ini memberikan pandangan yang lebih dalam tentang sistem, komponen, dan alur kerja, sehingga menjadi sumber yang berguna bagi pengembang, administrator, dan pengguna.
