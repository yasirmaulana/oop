<?php

class Produk{
    private $judul,
            $penulis,
            $penerbit,
            $waktuMain,
            $harga,
            $diskon;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }        

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
        return $str;
    }

    public function getJudul() {
        return $this->judul;
    }
    
    public function setJudul($judul) {
        return $this->judul = $judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenulis($penulis) {
        return $this->penulis = $penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit) {
        return $this->penerbit = $penerbit;
    }
    
    public function getHarga() {
        return $this->harga = $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga) {
        return $this->harga = $harga;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }  

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }

}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->waktuMain = $waktuMain;
    }  

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("naruto", "yasir kisimoto", "ganesaha", 15000, 100);
$produk2 = new Game("mariobros", "sikii", "sony", 55000, 20);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk1->setDiskon(50);
echo "harga komik : {$produk1->getHarga()}";
echo "<hr>";

echo "judul : {$produk1->getJudul()}";


// class & object
// property & method 
// constructor
// object type
// inheritance
// Overiding
// visibililty
// setter - getter
