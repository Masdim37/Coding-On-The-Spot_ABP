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