<?php
$ganjil = 100 ;
for ($i=1; $i <= $ganjil ; $i++) {
    if ($i%2) {
       $hasil = $i. " Ganjil <br>" ;
    } else {
        $hasil = $i. " Genap <br>" ;
    }
    echo $hasil. "<br>";
}
?>


<?php
// $t = 100;
// for($i=1; $i <= $t; $i++) {
//     $prima = true;
//     for($z=2; $z < $i; $z++) {
//         if($i % $z == 0) ($prima = false ;) 
//     }
//     if($prima) ( echo $a = "Bilangan Prima " ;)
// }
?>