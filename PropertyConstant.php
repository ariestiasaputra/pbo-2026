<?php

class Produk {

    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    // Constructor: dipanggil otomatis saat objek dibuat
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode  = $kode;
        $this->nama  = $nama;
        $this->harga = $harga;
        $this->stok  = $stok;

    }
    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

// Objek dibuat dengan mengirim data langsung ke constructor
$produk = new Produk('P0001', 'Laptop', 10000000, 5);

echo "Produk: " . $produk->nama . "<br/>";
echo "Harga: Rp" . $produk->harga . "<br/>";
echo "Stok: " . $produk->stok . "<br/>";
echo "Pajak: " . $produk->pajak() . "%<br/><br/>";
echo "Total harga setelah pajak: Rp" . $produk->total() . "<br/>";
