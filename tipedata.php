<?php
$string = "Putri Areka Sandra";

$integer = 19;

$float = 1.61;

$boolean = true; 

$array = array("Seblak", "Mie", "Bakso");

echo "Tipe Data String: $string<br>";
echo "Tipe Data Integer: $integer<br>";
echo "Tipe Data Float: $float meter<br>";
echo "Tipe Data Boolean: " . ($boolean ? "Mahasiswa" : "Bukan Mahasiswa") . "<br>";
echo "Tipe Data Array: " . implode(", ", $array);
?>