<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        private $bilangan1;
        private $bilangan2;

        public function __construct($b1, $b2) {
            // code..
            $this->bilangan1 = $b1;
            $this->bilangan2 = $b2;
        }

        // Method lainnya

        public function pertambahan(){
            $pertambahan = $this->bilangan1 + $this->bilangan2;
            return $pertambahan;
        }

        public function pengurangan(){
            $pengurangan = $this->bilangan1 - $this->bilangan2;
            return $pengurangan;
        }

        public function pembagian(){
            $pembagian = $this->bilangan1 / $this->bilangan2;
            return $pembagian;
        }

        public function perkalian(){
            $perkalian = $this->bilangan1 * $this->bilangan2;
            return $perkalian;
        }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);

    echo '<br> Penjumlahan: 10 + 5 = ' . $calculator->pertambahan();
    echo '<br>';
    echo '<br> Pengurangan: 10 - 5 = ' . $calculator->pengurangan();
    echo '<br>';
    echo '<br> Pembagian: 10 : 5 = ' . $calculator->pembagian();
    echo '<br>';
    echo '<br> Perkalian: 10 x 5 = ' . $calculator->perkalian();

?>