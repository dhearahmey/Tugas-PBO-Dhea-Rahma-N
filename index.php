<?php
{
class Buku {
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function tampilkanInformasi(){
        echo "Judul Buku: " . $this->judul . PHP_EOL;
        echo "Nama Penulis: " . $this->penulis . PHP_EOL;
        echo "Tahun Terbit: " . $this->tahunTerbit . PHP_EOL;
        echo PHP_EOL;
    }
}
$buku1 = new Buku();
$buku1->judul = "Laskar Pelangi";
$buku1->penulis = "Andrea Hirata";
$buku1->tahunTerbit = 2005;

$buku2 = new Buku();
$buku2->judul = "Bumi";
$buku2->penulis = "Tere Liye";
$buku2->tahunTerbit = 2014;

echo "<pre>";
echo "<h2>Informasi Buku Perpustakaan</h2>";

$buku1->tampilkanInformasi();
$buku2->tampilkanInformasi();

}