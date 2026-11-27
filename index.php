<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new jasa();

$produk ->setKode('P0001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(5);

//hasil
echo "Produk: ".$produk->getNama();
echo "<br/>";

echo "Harga: ".$produk->getHarga();
echo "<br/>";

echo "stok: ".$produk->getStok();
echo "<br/>";

echo "Pajak: ".$produk->pajak() ."%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.".$produk->total();