<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
        require_once 'class_balok.php';

        $balok1 = new Balok(29, 16, 7);
        $balok2 = new Balok(5, 4, 5);
        $balok3 = new Balok(11, 10, 7);
        $balok4 = new Balok(10, 8, 6);

        echo '<br>Luas Balok: '. $balok1->getLuas();
        echo '<br>Keliling Balok: '. $balok1->getKeliling();
        echo '<br>Volume Balok: '. $balok1->getVolume();
        echo '<br>';
        echo '<br>Luas Balok: '. $balok2->getLuas();
        echo '<br>Keliling Balok: '. $balok2->getKeliling();
        echo '<br>Volume Balok: '. $balok2->getVolume();
        echo '<br>';
        echo '<br>Luas Balok: '. $balok3->getLuas();
        echo '<br>Keliling Balok: '. $balok3->getKeliling();
        echo '<br>Volume Balok: '. $balok3->getVolume();
        echo '<br>';
        echo '<br>Luas Balok: '. $balok4->getLuas();
        echo '<br>Keliling Balok: '. $balok4->getKeliling();
        echo '<br>Volume Balok: '. $balok4->getVolume();
        
?>