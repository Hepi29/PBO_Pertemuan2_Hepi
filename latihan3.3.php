<?php

Class Kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merek;

    function statusharga() {
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }
}

$objekkendaraan1 = new Kendaraan();
$objekkendaraan1->merek = "Yamaha MIO";
$objekkendaraan1->harga = 10000000;
echo "Merek : " . $objekkendaraan1->merek . "<br/>";
echo "Harga : " . $objekkendaraan1->harga . "<br/>";

$objekkendaraan2 = new Kendaraan();
$objekkendaraan2->merek = "Toyota Avanza";
$objekkendaraan2->harga = 100000000;
echo "Merek : " . $objekkendaraan2->merek . "<br/>";
echo "Harga : " . $objekkendaraan2->harga . "<br/>";

$objekkendaraan3 = new Kendaraan();
$objekkendaraan3->merek = "Lamborgini";
$objekkendaraan3->harga = 10000000000;
echo "Merek : " . $objekkendaraan3->merek . "<br/>";
echo "Harga : " . $objekkendaraan3->harga . "<br/>";
?>