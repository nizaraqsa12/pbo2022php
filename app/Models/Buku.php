<?php
namespace App\Models;

require_once 'Aset.php';

class Buku extends Aset{
    private $penulis;
    private $isbn;
    private $judul;

    public function __construct($penulis_baru, $isbn_baru, $judul_baru){
        $this->penulis = $penulis_baru;
        $this->isbn = $isbn_baru;
        $this->judul = $judul_baru;
    }

    public function pinjam() {
        $pinjam = date("d-m-Y");
        $tanggal_kembali = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
        $kembali = date("d-m-Y", $tanggal_kembali);
        return $kembali;
    }

    public function setPenulis($penulis_buku){
        $this->penulis = $penulis_buku;
    }
    public function getPenulis(){
        return $this->penulis;
      }
    public function setISBN($isbn_buku){
        $this->isbn = $isbn_buku;
    }
    public function getISBN(){
        return $this->isbn;
    }
    public function setJudul($judul_buku){
        $this->judul = $judul_buku;
    }
    public function getJudul(){
        return $this->judul;
    }

}

