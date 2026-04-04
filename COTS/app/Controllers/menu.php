<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController {
    protected $menuModel;

    public function __construct() {
        $this->menuModel = new MenuModel();
    }

    // HALAMAN 1: Tampil Data (Tabel)
    public function index() {
        return view('menu/index');
    }

    // ===================================================================
    // SYARAT WAJIB: Endpoint JSON untuk jQuery DataTables
    // ===================================================================
    public function get_data_json() {
        $data = $this->menuModel->findAll();
        // Mengirimkan data dalam format JSON menggunakan fitur bawaan CI4
        return $this->response->setJSON($data);
    }

    // HALAMAN 2: Form Tambah Data
    public function create() {
        return view('menu/create');
    }

    // Proses Simpan Data (Create)
    public function store() {
        $this->menuModel->save([
            'namaMenu' => $this->request->getPost('namaMenu'),
            'kategori'  => $this->request->getPost('kategori'),
            'harga'     => $this->request->getPost('harga'),
            'stok'      => $this->request->getPost('stok')
        ]);
        return $this->response->setJSON(['status' => 'success', 'message' => 'Menu berhasil ditambahkan!']);
    }

    // HALAMAN 3: Form Edit Data
    public function edit($id) {
        $data['menu'] = $this->menuModel->find($id);
        return view('menu/edit', $data);
    }

    // Proses Update Data
    public function update($id) {
        $this->menuModel->update($id, [
            'namaMenu' => $this->request->getPost('namaMenu'),
            'kategori'  => $this->request->getPost('kategori'),
            'harga'     => $this->request->getPost('harga'),
            'stok'      => $this->request->getPost('stok')
        ]);
        return $this->response->setJSON(['status' => 'success', 'message' => 'Data menu berhasil diperbarui!']);
    }

    // Proses Hapus Data (Delete)
    public function delete($id) {
        $this->menuModel->delete($id);
        return $this->response->setJSON(['status' => 'success', 'message' => 'Menu berhasil dihapus!']);
    }
}