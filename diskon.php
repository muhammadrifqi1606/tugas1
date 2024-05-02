<?php

class DiskonCalculator {
    private $harga;
    private $diskonpersen;

    public function __construct($harga, $diskonpersen) {
        $this->harga = $harga;
        $this->diskonpersen = $diskonpersen;
    }

    public function hitungDiskon() {
        $diskon = ($this->harga * $this->diskonpersen) / 100;
        return $diskon;
    }

    public function hitunghargasetelahdiskon() {
        $diskon = $this->hitungdiskon();
        $hargasetelahdiskon = $this->harga = $diskon;
        return $hargasetelahdiskon;
    }
}

$hargabarang = 100000; // harga barang sebelum diskon
$diskonpersen = 30; // persentase diskon

$diskonCalculator = new DiskonCalculator($hargabarang, $diskonpersen);
$diskon = $diskoncalculator->hitungdiskon();
$hargasetelahdiskon = $diskoncalculator->hitunghargasetelahdiskon();

echo "harga barang sebelum diskon: Rp. " . $hargabarang . "\n";
echo "persentase diskon: " . $diskonpersen . "%\n";
echo "besarnya diskon: Rp. " . $diskon . "\n";
echo "harga barang setelah diskon: Rp. " . $hargasetelahdiskon . "\n";

?>