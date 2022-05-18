<?php
    echo "nomer 1<br>";
    
    $nilai = array (3,6);
    echo max($nilai);

    echo "<br>nomer 2<br>";
    
    $bil=52; // Inisialisasi variabel bil dengan nilai 10

if ($bil % 2 == 0){ //Kondisi
    echo "$bil Genap"; //Kondisi true
}else {
    echo "$bil Ganjil"; //Kondisi false
}
    echo "<br>nomer 3<br>";
    
    
        $angka = 5;
        $atas = 0;
        for ($i=1; $i <= $angka; $i++) {
            $atas += $i;
           
           echo $i.'  ';
        }
     echo $atas;

     echo "<br>nomer 4<br>";
     for($bil = 1; $bil <= 10; $bil++){
        if( ($bil % 2) == 0){
            echo "$bil Adalah Bilangan Genap<br>";
        }else {
            echo "$bil Adalah Bilangan Ganjil<br>";
        }	
    }
?>
