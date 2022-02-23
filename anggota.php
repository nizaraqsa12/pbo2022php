<?php

class Buku {
    public $no_anggota;
    public $nama_lengkap;
    public $no_hp;



    public function Bergabung(){
        $tahun_bergabung = date('Y')
    }

    public function setNo_anggota($anggota_perpus){
        $this->no_anggota = $anggota_perpus;
    }
    public function getNo_anggota($anggota_perpus){
        return $this->no_anggota;
    }
    public function setNama_lengkap($nama_anggota){
        $this->nama_lengkap = $nama_anggota;
    }
    public function getNama_lengkap($nama_anggota){
        return $this->nama_lengkap;
    }
    public function setNo_hp($no_hp_anggota){
        $this->no_hp = $no_hp_anggota;
    }
    public function getNo_hp($no_hp_anggota){
        return $this->no_hp;
    }
}  

$anggota_baru = new Anggota();
$anggota_baru->setNo_anggota(01082022);
$anggota_baru->setNama_lengkap("Nizar Aqsa Saputra");
$anggota_baru->setNo_hp(0895365210106);
$Bergabung_anggota_baru = $Anggota_baru->Bergabung();
echo "No. Anggota yang bergabung = ". $anggota_baru->getNo_anggota();
echo "Nama Lengkap Anggota Baru = ". $anggota_baru->getNama_lengkap();
echo "No. Hp Anggota Baru = ". $anggota_baru->getNo_hp();
echo "Tahun Anggota Tersebut bergabung = ". $Bergabung_anggota_baru;