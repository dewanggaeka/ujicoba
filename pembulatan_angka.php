<?php 

function pembulatan($uang){
 $ratusan = substr($uang, -2);
 $akhir = $uang + (100-$ratusan);
 return $akhir;
}

$uang = 133155;
$jmlpembulatan = pembulatan($uang); 
$nilaipembulatan = $jmlpembulatan - $uang;

echo $jmlpembulatan;

 ?>