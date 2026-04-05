<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model{
    protected $table            = 'menu';
    protected $primaryKey       = 'menuID';

    protected $allowedFields    = ['namaMenu', 'kategori', 'harga', 'stok'];
}