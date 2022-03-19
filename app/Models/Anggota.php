<?php
namespace App\Models;

require_once 'User.php';

class Anggota extends User{
    const PRIA = 1;
    const WANITA = 0;

    private $no_anggota;
    private $nama_anggota;
    private $no_hp;

    public function __construct($nama_lengkap_baru, $no_hp_baru){
        $this->nama_lengkap = $nama_lengkap_baru;
        $this->no_hp = $no_hp_baru;
    }

    public function bergabung(){
        $tahun_bergabung = date('Y');
        return $tahun_bergabung;
    }

    public function setNoAnggota($no_anggota_baru)
    {
        $this->no_anggota = $no_anggota_baru;
    }
    public function getNoAnggota()
    {
        return $this->no_anggota;
    }
    public function setNamaAnggota($nama_anggota_baru)
    {
        $this->nama_anggota = $nama_anggota_baru;
    }
    public function getNamaAnggota()
    {
        return $this->nama_anggota;
    }
    public function setNoHp($no_hp_baru)
    {
        $this->no_hp = $no_hp_baru;
    }
    public function getNoHp()
    {
        return $this->no_hp;
    }
    public function daftarkan(){
        echo "Anggota sudah terdaftar";
    }
  
}

