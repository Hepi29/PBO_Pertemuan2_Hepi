<?php

Class Kendaraan
{
    var $jumlahroda = 4;
    var $warna;
    var $bahanbakar = "Premium";
    var $merek;
    var $tahunpembuatan = 2004;
    var $harga = 1000000000;


    function statusharga() {
        if($this->harga < 1000000000) {
            $status = "Harga Murah";
        } else {
            $status = "Harga Mahal";
        }
        return $status;
    }

    function statusbahanbakar() {
        if($this->bahanbakar == "Premium") {
            $status = "Tidak Dapat Subsidi";
        } else {
            $status = "Dapat Subsidi";
        }
        return $status;
    }

    function hargasecond() {
        return $this->harga * 0.7;
    }
}

$objekkendaraan1 = new Kendaraan();
$objekkendaraan1->harga = 1000000;
$objekkendaraan1->tahunpembuatan = "1999";
echo "Status Harga : " . $objekkendaraan1->statusharga() . "<br/>";
echo "Tahun Pembuatan : " . $objekkendaraan1->statusbahanbakar() . "<br/>";
echo "Harga Bekas : " . $objekkendaraan1->hargasecond() . "<br/>";

$objekkendaraan2 = new Kendaraan();
$objekkendaraan2->harga = 2000000000;
$objekkendaraan2->bahanbakar = "Premium";
echo "Status Harga : " . $objekkendaraan2->statusharga() . "<br/>";
echo "Status Bahan Bakar : " . $objekkendaraan2->statusbahanbakar() . "<br/>";
echo "Harga Second : " . $objekkendaraan2->hargasecond() . "<br/>";
?>