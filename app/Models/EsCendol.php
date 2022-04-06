<?php

namespace App\Models;
use Core\Minuman;
use Core\Produk;
Class EsCendol implements Minuman 
{
    private $rasa;
    private $harga;

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga;
    }
    public function jual()
    {
        echo "Produk Sudah Habis";
    }
    public function setRasa($rasa)
    {
        $this->rasa = $rasa;
    }

    public function minum()
    {
        echo "Minuman Segar ini Seperti aku di sampingmu";
    }
}