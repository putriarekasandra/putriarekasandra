<?php
$nim = "23215007";
$nama = 'Putri Areka Sandra';
$umur = 20;
$nilai = 4.85;
$status = TRUE;

echo "Nim : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>"; 
printf("Nilai : %.3f<br>", $nilai);
if ($status)
	echo "Status : Aktif";
else
	echo "Status : Tidak Aktif";
?>