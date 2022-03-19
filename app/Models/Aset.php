<?php
namespace App\Models;
require_once 'core\Model.php';

class Aset extends \core\Model {
    protected $no_inventaris;
    protected $lokasi;
    protected $tahun_pengadaan;

    public function tambah(){
        echo "tambah data";
    }

    public function hapus(){
        echo "hapus data";
    }
}
