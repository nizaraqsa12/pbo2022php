<?php 
require 'vendor/autoload.php';
use App\Models\EsJeruk;

$esjerukku = new EsJeruk();
$esjerukku->setRasa("Yang pernah ada,");
$esjerukku->setHarga("Sudah Soldout Seperti Gebetanku");
echo $esjerukku->getRasa();
echo $esjerukku->getHarga();