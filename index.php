<?php

class Buku
{
    public $judul;
    public $penulis;
    public $tahunTerbit;

     public function __construct($judul, $penulis, $tahunTerbit)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function tampilkanInformasi()
    {
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahunTerbit . "<br>";
    }
}

$buku1 = new Buku("Gilang gemilang", "Fadilah", 2026);
$buku2 = new Buku("Ciwidey kala itu", "Sumantoo", 2002);

$buku1->tampilkanInformasi();
$buku2->tampilkanInformasi();