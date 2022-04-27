<?php
include "inc.php";
echo $angka;
echo "<br>";
if($angka==100){
	echo "Memuaskan";
} elseif ($angka==100) {
	echo "Sangat Baik";
} elseif ($angka<100&&$angka>=85) {
	echo "Baik";
} elseif ($angka<85&&$angka>=70) {
	echo "Cukup";
} elseif ($angka<70&&$angka>=55) {
	echo "Kurang";
} elseif ($angka<55&&$angka>=0) {

}
?>