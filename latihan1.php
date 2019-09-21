<?php
$nama_depan = "tania ";
$nama_depan_new = ucfirst ($nama_depan);
$nama_tengah = "syifa ";
$nama_tengah_new = ucfirst ($nama_tengah);
$nama_belakang = "utami ";
$nama_belakang_new = ucfirst ($nama_belakang);

echo $nama_depan_new ." $nama_tengah_new ". $nama_belakang_new ;
echo "<br>" ;
?>

<?php
$a = 10 ;
$t = 15 ;
$luas = ($a*$t)/2 ;

echo "<br>" ;
echo "hasil perhitungan luas segitiga: <br>
alas = $a <br>
tinggi = $t <br>
luas = $luas" ;
?>

<?php
$r = 21 ;
$phi = 3.14 ;
$luas = ($phi*$r*$r) ;

echo "<br>" ;
echo "<br>" ;
echo "hasil perhitungan luas lingkaran: <br>
jari-jari = $r <br>
phi = $phi <br>
luas = $luas" ;
?>

<?php
$a = 15 ;
$t = 7 ;
$luas = ($a*$t) ;

echo "<br>" ;
echo "<br>" ;
echo "hasil perhitungan luas jajar genjang: <br>
alas = $a <br>
tinggi = $t <br>
luas = $luas" ;
?>