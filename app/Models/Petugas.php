<?php
namespace App\Models;

require_once 'User.php';

class Petugas extends User{
    public $nip;
    public $nama_lengkap;
    public $alamat;

    public function __construct($userpetugas){
       $this->nip = 232435234324;
       $this->nama_lengkap = "Nizar Aqsa Saputra";
       $this->alamat = "Jl. Pangeran Natakusuma Gg. Airlangga No.17A";
       $this->_array = array('NIP'=>$this->nip, 'Nama Lengkap'=>$this->nama_lengkap, 'Alamat'=>$this->alamat);
    }

    public function lihatProfil(){
        echo $this->_array['NIP']. "<br>";
        echo $this->_array['Nama Lengkap']. "<br>";
        echo $this->_array['Alamat']. "<br>";
        var_dump($this->_array);
    }
}

