<?php

/*
    Variable sistem
    Variable built in php(variable yang sudah ada di php)
*/
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br>';
    echo '<br>';



/*
    Variable user
    Variable yang dibuat user
*/
    $name = "eL";
    $age = "19";
    $weight = "60";


    echo "Nama saya adalah ". $name;
    echo '<br>';
    echo '<br>';


 /*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
  define ("SITE_NAME", "Elena");
  const BASE_URL = "https://elena.nurulfikri.ac.id/";

 // Menampilkan variable konstanta
  echo "Site name: " . SITE_NAME . "<br/>";
  echo "URL: " . BASE_URL . "<br/>";

?>