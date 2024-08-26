<?php

class Kendaraan
{
    var $jumlahroda = 4;
    var $warna;
    var $bahanbakar = "Premium";
    var $harga = 100000000;
    var $merek;
    var $tahunpembuatan = 2004;

    function statusharga() {
        if ($this->harga > 50000000) {
            $status = "Harga Kendaraan Mahal";
        } else {
            $status = "Harga Kendaraan Murah";
        } 
        return $status;
    }

    function statussubsidi() {
        if ($this->tahunpembuatan < 2005 && $this->bahanbakar == "Premium") {
            $status = "Dapat Subsidi";
        } else {
            $status = "Tidak Dapat Subsidi";
        }
        return $status;
    }
}

$objekkendaraan = new Kendaraan();
echo "Jumlah roda: " . $objekkendaraan->jumlahroda . "<br/>";
echo "Status harga: " . $objekkendaraan->statusharga() . "<br/>";
echo "Status subsidi: " . $objekkendaraan->statussubsidi() . "<br/>";
?>
