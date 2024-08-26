<?php

Class Angsuran
{
    var $pinjaman = 1000000;
    var $besarbunga = 0.1;
    var $lamaangsuranperbulan = 5;
    var $totalpinjaman;
    var $besarangsuran;

    function totalpinjam() {
        $totalpinjaman = $this->pinjaman * 0.1 + $this->pinjaman;
        return $totalpinjaman;
    }

    function besarangsuran() {
        return $this->totalpinjam() / $this->lamaangsuranperbulan;
    }

    function dendaketerlambatan() {
        return $this->besarangsuran() + 13200;
    }
}

$objekangsuran = new Angsuran;
echo "TOKO PEGADAIAN SYARIAH" . "<br/>";
echo "Jl. Keadilan No. 16" . "<br/>";
echo "Telp. 72353459" . "<br/>";
echo " " . "<br/>";
echo "Total Pinjaman : " . $objekangsuran->totalpinjam() . "<br/>";
echo "Besar Angsuran : " . $objekangsuran->besarangsuran() . "<br/>";
echo "Lama Angsuran Perbulan : " . $objekangsuran->lamaangsuranperbulan . "<br/>";
echo "Denda Keterlambatan : " . $objekangsuran->dendaketerlambatan() . "<br/>";
?>