<?php

class buku {
    private $penulis;
    private $isbn;
    private $judul;

    public function __construct($penulis_baru, $isbn_baru, $judul_baru){
        $this->penulis = $penulis_baru;
        $this->isbn = $isbn_baru;
        $this->judul = $judul_baru;
    }

    public function pinjam(){
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
    public function setIsbn($isbn_buku){
        $this->isbn = $isbn_buku;
    }
    public function getIsbn(){
        return $this->isbn;
    }
    public function setJudul($judul_buku){
        $this->judul = $judul_buku;
    }
    public function getJudul(){
        return $this->judul;
    }
}

$buku_saya = new Buku("Nizar Aqsa Saputra", +62895365210106, "Pemrograman Web");
$buku_saya->setPenulis("Nizar Aqsa Saputra");
$buku_saya->setIsbn(9872317652569);
$buku_saya->setJudul("Pemrograman Web");
$pinjam_buku_saya = $buku_saya->pinjam();
echo "Judul Buku = ". $buku_saya->getJudul();
echo "Penulis Buku = ". $buku_saya->getPenulis();
echo "ISBN = ". $buku_saya->getIsbn();
echo "Tanggal Peminjaman = ". date('d-m-Y');
echo "Tanggal Pengembalian = ". $pinjam_buku_saya;