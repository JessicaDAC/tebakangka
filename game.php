<?php
echo "Welcome To\n";
while(true){
echo "===== Tebak Angka =====\n";
echo "Tebak sebuah angka di antara 1 sampai 9!\n";
$computer = rand(1,9);
echo "Masukkan tebakanmu : ";
$player = trim(fgets(STDIN));
if($player == $computer){
	echo "Benar! Angka komputer adalah $computer.\n";
	exit;
}else{
	echo "Salah. Angka komputer adalah $computer.\n";
}
}