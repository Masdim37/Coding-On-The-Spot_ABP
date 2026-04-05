<div align="center">
  <br />
  <h1>LAPORAN PRAKTIKUM<br>APLIKASI BERBASIS PLATFORM</h1>
  <br />
  <h3>CODING ON THE SPOT<br>MANAJEMEN STOK</h3>
  <br />
  <img src="https://upload.wikimedia.org/wikipedia/commons/0/03/Logo_Telkom_University_potrait.png" alt="Logo" width="300"> 
  <br />
  <h3>Disusun Oleh :</h3>
  <p>
    <strong>Muhammad Dhimas Hafizh Fathurrahman</strong><br>
    <strong>2311102151</strong><br>
    <strong>PS1IF-11-REG04</strong>
  </p>
  <br />
  <h3>Dosen Pengampu :</h3>
  <p>
    <strong>Cahyo Prihantoro, S.Kom., M.Eng</strong>
  </p>
  <br />
    <h4>Asisten Praktikum :</h4>
    <strong>Gilang Saputra</strong> <br>
    <strong>Rangga Pradarrell Fathi</strong>
  <br />
  <h3>LABORATORIUM HIGH PERFORMANCE
 <br>PROGRAM STUDI TEKNIK INFORMATIKA<br>FAKULTAS INFORMATIKA<br>UNIVERSITAS TELKOM PURWOKERTO<br>2026</h3>
</div>

---

## 1. Dasar Teori

### CRUD (Create, Read, Update, Delete)
Konsep CRUD (Create, Read, Update, Delete) merupakan paradigma fundamental dalam manajemen dan manipulasi data pada sebuah sistem informasi. Secara terminologi, konsep ini merepresentasikan empat operasi dasar yang saling berintegrasi pada basis data (database), yaitu : Create (menciptakan atau menambah data baru), Read (membaca atau menampilkan informasi), Update (memodifikasi data yang telah ada), dan Delete (menghapus rekaman data).
<br>Dalam arsitektur pengembangan perangkat lunak modern, khususnya pada aplikasi berbasis web dan API (Application Programming Interface), operasi CRUD diimplementasikan secara selaras dengan metode protokol komunikasi HTTP (Hypertext Transfer Protocol). Pemetaan standar tersebut meliputi:
- POST : Digunakan untuk eksekusi fungsi Create.
- GET : Digunakan untuk eksekusi fungsi Read.
- PUT / PATCH : Digunakan untuk eksekusi fungsi Update.
- DELETE : Digunakan untuk eksekusi fungsi Delete.
<br>Penerapan prinsip operasional CRUD sangat esensial karena tidak hanya menstandardisasi tata cara aplikasi berinteraksi dengan basis data, tetapi juga memastikan bahwa siklus pengolahan data berjalan secara sistematis, persisten, dan mudah dipelihara.

### Arsitektur MVC (Model-View-Controller)
Model-View-Controller (MVC) adalah paradigma desain arsitektur perangkat lunak yang mengisolasi logika bisnis dari antarmuka pengguna, sehingga menciptakan struktur kode yang modular, skalabel, dan mudah dipelihara. Arsitektur ini membagi aplikasi ke dalam tiga pilar utama :
- Model : Lapisan abstraksi data yang merepresentasikan struktur logis dari basis data. Model bertanggung jawab penuh atas seluruh transaksi back-end yang melibatkan validasi, penyimpanan, dan pengambilan data (mengeksekusi kueri SQL).
- View : Lapisan presentasi yang mendefinisikan antarmuka grafis (User Interface). View bertugas menerima data mentah dari Controller dan merendernya menjadi format yang dapat dibaca oleh pengguna (umumnya direpresentasikan melalui sintaks HTML, CSS, dan JavaScript).
- Controller : Lapisan intermediari (penghubung) yang memfasilitasi komunikasi antara Model dan View. Controller menangkap HTTP Request dari pengguna, memproses instruksi melalui Model yang relevan, dan meneruskan hasilnya untuk ditampilkan oleh View.

### CodeIgniter
CodeIgniter adalah kerangka kerja (web framework) berbasis bahasa pemrograman PHP yang bersifat open-source, dirancang dengan filosofi small footprint (jejak memori yang sangat minim) untuk menghasilkan performa komputasi tingkat tinggi. Mengadopsi pola MVC, CodeIgniter memfasilitasi pendekatan Rapid Application Development (RAD) yang mempercepat siklus pengembangan perangkat lunak. Beberapa fitur inti yang membuat CodeIgniter andal untuk sistem manajemen adalah :
- Query Builder Class : Menyediakan antarmuka berbasis Object-Oriented Programming (OOP) untuk membangun kueri basis data dengan lebih aman dan dinamis, menggantikan penulisan SQL manual.
- Keamanan Terpadu : Dilengkapi sistem proteksi bawaan untuk menangkal ancaman siber umum, seperti filterisasi Cross-Site Scripting (XSS) pencegahan SQL Injection, dan proteksi Cross-Site Request Forgery (CSRF).
- Routing Fleksibel: Kemampuan memetakan URL yang masuk ke Controller spesifik, sehingga menghasilkan struktur tautan (Uniform Resource Locator) yang rapi dan ramah mesin pencari (SEO-friendly).
<br>Penggunaan CodeIgniter yang menggunakan arsitektur MVC ini memberikan keuntungan signifikan, di antaranya mempercepat proses pengembangan (rapid application development), meminimalisasi penulisan kode yang berulang (boilerplate code), serta memastikan struktur kode lebih rapi sehingga memudahkan proses kolaborasi tim dan pemeliharaan sistem (maintenance) dalam jangka panjang.

### MySQL
MySQL adalah Sistem Manajemen Basis Data Relasional (RDBMS) bersumber terbuka (open source) berkinerja tinggi yang memanfaatkan Structured Query Language (SQL) sebagai bahasa interaksi standar untuk mengelola dan memanipulasi data. Sebagai fondasi lapisan penyimpanan (back-end), MySQL mengatur persistensi informasi ke dalam skema dua dimensi berupa tabel-tabel terstruktur yang saling berelasi erat melalui penggunaan kunci utama (Primary Key) dan kunci tamu (Foreign Key) guna mencegah redundansi data. Kepatuhannya terhadap standar operasional ACID (Atomicity, Consistency, Isolation, Durability) menjamin bahwa seluruh transaksi basis data seperti penambahan, pembaruan, maupun penghapusan stok menu tersimpan secara akurat, utuh, dan konsisten, bahkan ketika sistem diakses secara konkuren oleh banyak pengguna.

### Bootstrap
Bootstrap adalah kerangka kerja (framework) CSS front-end yang dimanfaatkan untuk merancang tampilan antarmuka web agar lebih responsif, modern, dan efisien tanpa harus menulis kode CSS dari awal. Dengan mengadopsi arsitektur flexbox dan sistem grid 12-kolom, serta menyediakan berbagai komponen siap pakai seperti navigasi, kartu (card), dan tombol, Bootstrap mengotomatisasi aspek tata letak sehingga elemen visual dapat beradaptasi secara dinamis pada berbagai ukuran resolusi layar, mulai dari monitor komputer hingga gawai seluler (mobile-first design).

### jQuery
jQuery adalah pustaka (library) JavaScript ringkas yang dirancang khusus untuk mempermudah dan mempercepat manipulasi Document Object Model (DOM), penanganan peristiwa (event handling), serta implementasi AJAX. Penggunaan library ini memungkinkan pengembang untuk menulis perintah JavaScript dengan sintaks deklarasi yang jauh lebih sederhana, bersih, dan mudah dikelola (maintainable) dibandingkan dengan penulisan JavaScript konvensional.

### AJAX (Asynchronous JavaScript and XML)
AJAX (Asynchronous JavaScript and XML) adalah mekanisme eksekusi skrip sisi klien yang memungkinkan antarmuka web untuk berkomunikasi, mengirim, dan menerima data dari server di latar belakang secara asinkron tanpa perlu memuat ulang (refresh) keseluruhan halaman. Melalui teknik ini, aplikasi dapat memproses instruksi spesifik seperti menghapus atau menambah stok menu secara cepat dan dinamis tanpa mendisrupsi komponen visual lain di layar pengguna, sehingga secara signifikan menghasilkan pengalaman pengguna (User Experience) yang lebih efisien, interaktif, dan responsif.

### JSON (JavaScript Object Notation)
JSON (JavaScript Object Notation) adalah format serialisasi dan pertukaran data tekstual yang ringan, mudah dibaca oleh manusia, serta mudah diproses oleh mesin. Berfungsi sebagai jembatan komunikasi utama antara frontend (JavaScript) dan backend (seperti PHP), JSON merepresentasikan data dalam bentuk pasangan kunci-nilai (key-value pairs) dan struktur array, yang secara efektif menggantikan protokol lama seperti XML karena ukurannya yang jauh lebih kecil serta proses penguraian (parsing) yang instan oleh peramban web.

### DataTables
DataTables adalah plug-in ekstensi dari jQuery yang mengevolusi elemen tabel HTML statis menjadi tabel data interaktif dan dinamis. Plug-in ini secara otomatis menyediakan algoritma pemrosesan tingkat lanjut seperti fitur pencarian data langsung (live searching), pengurutan multi-kolom (sorting), serta pembagian porsi halaman (pagination). Dalam penerapannya, DataTables sangat efektif digunakan untuk merender data yang diambil dari antarmuka pemrograman aplikasi (API) dalam format JSON, baik yang diproses secara langsung di sisi klien (client-side) maupun yang terintegrasi penuh dengan server melalui AJAX (server-side processing).

### SweetAlert2
SweetAlert2 adalah pustaka (library) JavaScript antarmuka pengguna yang dirancang untuk menggantikan kotak dialog peringatan (default alert) bawaan peramban web menjadi pop-up modal notifikasi dan konfirmasi yang jauh lebih elegan, interaktif, dan responsif. Dengan memanfaatkan arsitektur berbasis Promise (.then()), pustaka ini tidak hanya mempercantik tampilan visual aplikasi, tetapi juga memastikan bahwa fungsi lanjutan tingkat kritis seperti pengiriman perintah penghapusan data ke server melalui antarmuka AJAX hanya akan dieksekusi secara aman setelah sistem mendapatkan konfirmasi persetujuan yang eksplisit dari pengguna.

## 2. Stuktur Folder
```
COTS/                       # Root direktori utama project
│
├── app/                    # Folder tempat menulis seluruh logika aplikasi (CodeIgniter)
|   ├── Config/             # Folder untuk mengatur konfigurasi dasar dan pengaturan sistem
|   |   └── Routes.php      # File yang berisi peraturan rute URL (routing)
|   |
|   ├── Controllers/        # Folder penyimpan Controller (Lapisan perantara/otak aplikasi)
|   |   └── menu.php        # File controller yang berfungsi menangkap klik/request dari user, memanggil data dari Model, dan mengirimnya ke View
|   |
|   ├── Models/             # Folder penyimpan Model (Lapisan komunikasi dengan basis data)
|   |   └── menuModel.php   # File model yang berisi eksekusi query (CRUD) ke tabel inventori menu di database MySQL
|   |
|   └── Views/              # Folder penyimpan antarmuka visual (User Interface HTML/CSS/JS)
|       └── menu/           # Sub-folder untuk mengelompokkan tampilan khusus fitur manajemen menu
|           ├── index.php   # File halaman utama yang memuat DataTables berisi daftar stok menu
|           ├── create.php  # File halaman form input untuk menambahkan data menu baru
|           └── edit.php    # File halaman form edit untuk memodifikasi data menu
|
├── .env                    # Konfigurasi environment variabel (kredensial database, mode development)
|
├── menu.sql                # File ekspor database MySQL yang digunakan
|
└── README.md               # Dokumentasi sistem
```

## 2. Sourcecode 

### routes.php (file routing)
``` php
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'menu::index');
$routes->get('/menu/get_data_json', 'menu::get_data_json');
$routes->get('/menu/create', 'menu::create');
$routes->post('/menu/store', 'menu::store');
$routes->get('/menu/edit/(:num)', 'menu::edit/$1');
$routes->post('/menu/update/(:num)', 'menu::update/$1');
$routes->delete('/menu/delete/(:num)', 'menu::delete/$1');
```
Penjelasan singkat :
<br>File ini bertugas sebagai routing aplikasi. URL yang diakses oleh pengguna (seperti /menu/create atau /menu/store) dipetakan secara spesifik ke fungsi-fungsi (method) yang ada di dalam menu.php (Controller). Rute ini menggunakan berbagai metode HTTP seperti GET, POST, dan DELETE sesuai dengan prinsip RESTful.

### menu.php (file controller)
```php
<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController {
    protected $menuModel;

    public function __construct() {
        $this->menuModel = new MenuModel();
    }

    public function index() {
        return view('menu/index');
    }

    public function get_data_json() {
        $data = $this->menuModel->findAll();
        //mengirimkan data dalam format JSON
        return $this->response->setJSON($data);
    }

    public function create() {
        return view('menu/create');
    }

    public function store() {
        $this->menuModel->save([
            'namaMenu'  => $this->request->getPost('namaMenu'),
            'kategori'  => $this->request->getPost('kategori'),
            'harga'     => $this->request->getPost('harga'),
            'stok'      => $this->request->getPost('stok')
        ]);
        return $this->response->setJSON(['status' => 'success', 'message' => 'Menu berhasil ditambahkan!']);
    }

    public function edit($id) {
        $data['menu'] = $this->menuModel->find($id);
        return view('menu/edit', $data);
    }

    public function update($id) {
        $this->menuModel->update($id, [
            'namaMenu' => $this->request->getPost('namaMenu'),
            'kategori'  => $this->request->getPost('kategori'),
            'harga'     => $this->request->getPost('harga'),
            'stok'      => $this->request->getPost('stok')
        ]);
        return $this->response->setJSON(['status' => 'success', 'message' => 'Data menu berhasil diperbarui!']);
    }

    public function delete($id) {
        $this->menuModel->delete($id);
        return $this->response->setJSON(['status' => 'success', 'message' => 'Menu berhasil dihapus!']);
    }
}
```
Penjelasan Singkat :
<br>File menu.php adalah file controller dalam arsitektur MVC (Model-View-Controller) yang berfungsi sebagai penghubung antara Model (MenuModel) dan View. Controller ini menangani alur logika aplikasi, menerima request dari client, memproses data melalui model, dan mengembalikan response ke view atau dalam bentuk JSON (untuk AJAX).
Terdapat beberapa function antara lain :
- index(); digunakan untuk menampilkan halaman utama menu (menu/index)
- get_data_json(); digunakan untuk mengambil seluruh data menu dari database melalui model, lalu mengirimkannya dalam format JSON ke DataTables
- create(); digunakan untuk menampilkan halaman form tambah data (menu/create)
- store(); digunakan untuk menerima data dari form (POST), lalu menyimpannya ke database menggunakan method save()
- edit($id); digunakan untuk mengambil data berdasarkan ID tertentu, lalu mengirimkannya ke halaman edit (menu/edit)
- update($id); digunakan untuk menerima data hasil edit, kemudian memperbarui data di database berdasarkan ID
- delete($id); digunakan untuk menghapus data menu berdasarkan ID


### menuModel.php (file model)
```php
<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model{
    protected $table            = 'menu';
    protected $primaryKey       = 'menuID';

    protected $allowedFields    = ['namaMenu', 'kategori', 'harga', 'stok'];
}
```
Penjelasan Singkat :
<br>File menuModel.php adalah file model dalam arsitektur MVC yang bertanggung jawab atas seluruh komunikasi langsung dengan database (MySQL). Model ini digunakan oleh controller (menu.php) untuk melakukan operasi CRUD (Create, Read, Update, Delete) tanpa harus menuliskan query SQL secara manual. Pada file ini dideklarasikan bahwa aplikasi menggunakan tabel menu dengan primary key menuID. Selain itu, atribut allowedFields berfungsi untuk membatasi kolom yang boleh dimanipulasi oleh aplikasi, yaitu namaMenu, kategori, harga, dan stok, sehingga memberikan perlindungan terhadap manipulasi data yang tidak sah (mass assignment protection).

### index.php (file view halaman utama)
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Stok Toastopia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow rounded-3 overflow-hidden">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0 fw-bold">Stok Menu Toastopia</h4>
            <a href="/menu/create" class="btn btn-light btn-sm fw-semibold"> + Tambah Menu Baru</a>
        </div>
        <div class="card-body">
            <table id="tabelMenu" class="table table-striped table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // Inisialisasi DataTables dengan JSON
    let table = $('#tabelMenu').DataTable({
        "paging": true,
        "searching": true,
        "info": true,
        "lengthChange": true,
        "ajax": {
            "url": "/menu/get_data_json",
            "dataSrc": ""
        },
        "columnDefs": [
            { "className": "text-center", "targets": "_all" }
        ],
        "columns": [
            { "data": null, "render": function (data, type, row, meta) { return meta.row + 1; } },
            { "data": "namaMenu" },
            { "data": "kategori" },
            { "data": "harga", "render": $.fn.dataTable.render.number(',', '.', 0, 'Rp. ') },
            { "data": "stok" },
            {
                "data": "menuID",
                "render": function(data, type, row) {
                    return `<a href="/menu/edit/${data}" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm btn-hapus" data-id="${data}" data-nama="${row.namaMenu}">Hapus</button>`;
                }
            }
        ]
    });

    // Fungsionalitas Hapus (Delete) dengan AJAX & SweetAlert2
    $('#tabelMenu').on('click', '.btn-hapus', function() {
        let id = $(this).data('id');
        let namaMenu = $(this).data('nama');
        Swal.fire({
            title: `Apakah Anda yakin ingin menghapus ${namaMenu}?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/menu/delete/' + id,
                    type: 'DELETE',
                    success: function(response) {
                        Swal.fire('Terhapus!', response.message, 'success');
                        table.ajax.reload(); // Refresh tabel JSON otomatis
                    }
                });
            }
        });
    });
});
</script>
</body>
</html>
```
Penjelasan Singkat :
<br>File index.php merupakan halaman utama (View) yang ditampilkan kepada pengguna dalam sistem manajemen stok. Halaman ini dibangun menggunakan Bootstrap 5 untuk tampilan antarmuka yang responsif dan modern. Selain itu, halaman ini mengintegrasikan jQuery DataTables (plugin jQuery) untuk menampilkan data dalam bentuk tabel interaktif, serta menggunakan AJAX dan SweetAlert2 untuk menangani operasi data secara asynchronous tanpa perlu melakukan reload halaman.

### create.php (file view halaman create/tambah stok)
``` html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow rounded-3 overflow-hidden" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0 fw-bold">Tambah Menu</h4>
        </div>
        <div class="card-body">
            <form id="formTambah">
                <div class="mb-3">
                    <label>Nama Menu</label>
                    <input type="text" name="namaMenu" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="/" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // Proses Submit (Create) dengan AJAX
    $('#formTambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/menu/store',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                Swal.fire('Berhasil!', response.message, 'success').then(() => {
                    window.location.href = '/';
                });
            }
        });
    });
});
</script>
</body>
</html>
```
Penjelasan Singkat : 
<br>File create.php merupakan halaman View yang digunakan untuk menambahkan data menu baru ke dalam sistem. Halaman ini dibangun menggunakan Bootstrap 5 untuk tampilan form yang rapi dan responsif. Berbeda dengan metode form konvensional yang menggunakan action="POST", halaman ini memanfaatkan AJAX (Asynchronous JavaScript and XML) untuk mengirim data secara asynchronous tanpa reload halaman, serta menggunakan SweetAlert2 untuk memberikan notifikasi yang lebih interaktif kepada pengguna.

### edit.php (file view halaman edit stok)
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow rounded-3 overflow-hidden" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0 fw-bold">Edit Menu</h4>
        </div>
        <div class="card-body">
            <form id="formEdit">
                <div class="mb-3">
                    <label>Nama Menu</label>
                    <input type="text" name="namaMenu" class="form-control" value="<?= $menu['namaMenu'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="Makanan" 
                            <?php if ($menu['kategori'] == 'Makanan') { echo 'selected'; } ?>
                        >Makanan</option>
                        <option value="Minuman" 
                            <?php if ($menu['kategori'] == 'Minuman') { echo 'selected'; } ?>
                        >Minuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" value="<?= $menu['harga'] ?>" required>
                </div>
                <div class="mb-3">
                    <label>Stok Tersedia</label>
                    <input type="number" name="stok" class="form-control" value="<?= $menu['stok'] ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Update Data</button>
                <a href="/" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // Proses Submit (Update) dengan AJAX
    $('#formEdit').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '/menu/update/<?= $menu['menuID'] ?>',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                Swal.fire('Berhasil!', response.message, 'success').then(() => {
                    window.location.href = '/';
                });
            }
        });
    });
});
</script>
</body>
</html>
```
Penjelasan Singkat : 
<br>File edit.php merupakan halaman View yang digunakan untuk mengubah (update) data menu yang sudah ada di dalam database. Halaman ini dibangun menggunakan Bootstrap 5 untuk tampilan form yang rapi dan responsif. Berbeda dengan halaman create, form pada halaman ini sudah terisi otomatis (pre-populated) dengan data yang diambil dari database melalui variabel $menu yang dikirim oleh controller. Proses update dilakukan menggunakan AJAX sehingga tidak memerlukan reload halaman, serta memanfaatkan SweetAlert2 untuk memberikan notifikasi kepada pengguna.

## 3. Penjelasan Cara Kerja Aplikasi
Berikut merupakan cara kerja aplikasi berdasarkan masing-masing operasi CRUD (Create, Read, Update, Delete) :

### Operasi Read
Pada operasi Read (menampilkan data), proses terjadi ketika pengguna membuka halaman `index.php`. Di halaman ini, tabel tidak diisi secara statis, melainkan menggunakan DataTables yang diinisialisasi dengan `$('#tabelMenu').DataTable({ ... })`. DataTables secara otomatis mengirimkan request AJAX ke endpoint `/menu/get_data_json` melalui konfigurasi `"ajax": { "url": "/menu/get_data_json" }`. Endpoint ini ditangani oleh controller pada method `get_data_json()`, yang mengambil seluruh data dari database menggunakan `$this->menuModel->findAll()`. Method ini secara internal menjalankan query `SELECT * FROM menu`. Data yang diperoleh kemudian dikembalikan dalam format JSON menggunakan `$this->response->setJSON($data)`. DataTables menerima JSON tersebut dan memetakannya ke kolom tabel sesuai konfigurasi `"columns": [...]`, sehingga data dapat ditampilkan secara dinamis lengkap dengan fitur pencarian, pagination, dan formatting.

![Tampilan Home](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanHome.png)

### Operasi Create
Pada operasi Create (penambahan data), proses dimulai ketika pengguna mengakses halaman `create.php` yang berisi formulir input data menu. Form tersebut didefinisikan dengan `<form id="formTambah">` dan tidak menggunakan metode submit konvensional. Saat tombol submit ditekan, event tersebut dicegat menggunakan JavaScript `$('#formTambah').submit(function(e) { e.preventDefault(); })` sehingga halaman tidak melakukan reload. Data dari seluruh input kemudian dikumpulkan menggunakan `$(this).serialize()` dan dikirimkan melalui AJAX dengan `$.ajax({ url: '/menu/store', type: 'POST' })`. Request ini diterima oleh controller pada method `store()`, yang mengambil data menggunakan `$this->request->getPost()` lalu menyimpannya ke database melalui `$this->menuModel->save([...])`. Penyimpanan ini dibatasi oleh properti `$allowedFields` pada model untuk keamanan. Setelah data berhasil disimpan, controller mengembalikan response JSON yang kemudian ditangkap oleh frontend untuk menampilkan notifikasi menggunakan SweetAlert dan mengarahkan kembali pengguna ke halaman utama.

![Tampilan Home Sebelum Create](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanHome.png)

![Tampilan Create Before](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanCreateBefore.png)

![Tampilan Create After](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanCreateAfter.png)

![Tampilan Pop Up Setelah Create](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanCreateNotif.png)

![Tampilan Home Setelah Create](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanHomeAfterCreate.png)

### Operasi Update
Pada operasi Update (mengubah data), proses diawali ketika pengguna menekan tombol edit yang mengarah ke `/menu/edit/{id}`. Controller kemudian mengambil data berdasarkan ID menggunakan `$this->menuModel->find($id)` dan mengirimkannya ke view `edit.php`. Di halaman ini, form sudah terisi otomatis (pre-populated), misalnya pada input `<input value="<?= $menu['namaMenu'] ?>">`. Saat pengguna menekan tombol update, event submit kembali dicegat dengan `e.preventDefault()`, lalu data dikirim menggunakan AJAX ke endpoint `/menu/update/{id}` melalui `$.ajax({ url: '/menu/update/ID', type: 'POST' })`. Controller menerima data tersebut dalam method `update($id)` dan memperbarui data menggunakan `$this->menuModel->update($id, [...])`, yang secara otomatis menjalankan query `UPDATE menu SET ... WHERE menuID = id`. Setelah proses selesai, controller mengirimkan response JSON yang ditampilkan dalam bentuk notifikasi SweetAlert, kemudian pengguna diarahkan kembali ke halaman utama.

![Tampilan Home Sebelum Update](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanHomeBeforeEdit.png)

![Tampilan Update Before](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanEditBefore.png)

![Tampilan Update After](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanEditAfter.png)

![Tampilan Pop Up Setelah Update](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanEditNotif.png)

![Tampilan Home Setelah Update](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanHomeAfterEdit.png)

### Operasi Delete
Pada operasi Delete (menghapus data), proses dimulai ketika pengguna menekan tombol hapus pada tabel di halaman `index.php`, yang dibuat dengan `<button class="btn-hapus" data-id="...">`. Event klik ditangani menggunakan `$('#tabelMenu').on('click', '.btn-hapus', function() { ... })`, lalu sistem mengambil ID data melalui `$(this).data('id')`. Sebelum penghapusan dilakukan, sistem menampilkan konfirmasi menggunakan SweetAlert `(Swal.fire({...}))`. Jika pengguna menyetujui, maka AJAX akan mengirim request DELETE ke `/menu/delete/{id}` dengan `$.ajax({ url: '/menu/delete/' + id, type: 'DELETE' })`. Controller menangani request ini pada method `delete($id)` dan menghapus data menggunakan `$this->menuModel->delete($id)`, yang menjalankan query `DELETE FROM menu WHERE menuID = id`. Setelah berhasil, response JSON dikirim kembali dan DataTables diperbarui secara otomatis menggunakan `table.ajax.reload()` tanpa perlu me-refresh halaman.

![Tampilan Home Sebelum Delete](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanHomeBeforeDelete.png)

![Tampilan Pop Up Sebelum Delete](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanDeleteNotifBefore.png)

![Tampilan Pop Up Setelah Delete](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanDeleteNotifAfter.png)

![Tampilan Pop Up Setelah Delete](https://github.com/Masdim37/Coding-On-The-Spot_ABP/blob/main/Assets/halamanHomeAfterDelete.png)

## Kesimpulan
Aplikasi manajemen stok ini berhasil dibangun menggunakan framework CodeIgniter dengan arsitektur MVC (Model-View-Controller) untuk mengelola alur data secara terstruktur. Implementasi konsep CRUD (Create, Read, Update, Delete) berjalan dengan baik melalui integrasi antara Controller, Model, dan View.
<br>Pada sisi frontend, penggunaan Bootstrap membantu menghasilkan tampilan yang responsif dan rapi, sedangkan jQuery dan berbagai jQuery plugin seperti DataTables dan SweetAlert2 meningkatkan interaktivitas aplikasi. Data dikirim dan diproses menggunakan format JSON melalui mekanisme AJAX, sehingga setiap operasi dapat dilakukan secara dinamis tanpa reload halaman.

## Link Video Rekaman Presentasi
[..]