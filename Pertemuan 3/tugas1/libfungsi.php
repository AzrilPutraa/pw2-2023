<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/
    include_once 'header.php';
	function kelulusan($uts, $uas, $tugas){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
        $total_nilai = (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);
        $ket = ($total_nilai>55)? 'gagal' : 'lulus';

        return $total_nilai;
	}
    function keterangan ($total_nilai){
        $ket = ($total_nilai>=55)? 'lulus' : 'gagal';
        return $ket;
    }
	
	function grade($total_nilai) {
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 
        if ($total_nilai <= 100){
            return 'A';
        } elseif ($total_nilai <= 84){
            return 'B';
        } elseif ($total_nilai <= 69){
            return 'C';
        } elseif ($total_nilai <= 55){
            return 'D';
        } elseif ($total_nilai <= 35){
            return 'E';
        } else {
            return 'I';
        }
	}
	
	function predikat($total_nilai,$grade){
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/ 
        switch (grade($total_nilai)) {
            case "A":
                return 'Sangat Memuaskan';
                break;
            case "B":
                return 'Memuaskan';
                break;
            case "C":
                return 'Cukup';
                break;
            case "D":
                return 'Kurang';
                break;
            case "E":
                return 'Sangat kurang';
                break;
            default:
                return 'Tidak Ada';
                break;
        }
	}
    
?>
<?php 
    include_once 'footer.php';
?>