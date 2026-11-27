<?php

require('./Jasa.php');

use PBO\Marketplace\Jasa;

//object
$produk = new Jasa();

$produk->setkode('P0001')->setNama('Laptop')->setHarga(10000000)->setStok(5);

//input ke property
//$produk->kode = 'P0001';
//$produk->nama = 'Laptop';
//$produk->harga = 10000000;
//$produk->stok = 5;

//hitung harga
//$pajak = Produk::PAJAK * 100;
//$jumlahPajak = $produk->harga * Produk::PAJAK;

// total
//$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: " . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp. ".$produk->total();
echo "<br/>";

echo "Metode pembayaran: " . $produk->payment('transfer');