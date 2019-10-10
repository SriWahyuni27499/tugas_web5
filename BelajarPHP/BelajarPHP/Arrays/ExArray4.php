<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$cars = array("Volvo", "BMW", "Toyota"); //untuk menjalankan array
$arrlength = count($cars); //berfungsi untuk mengembalikan panjang jumlah elemen pada array

for($x = 0; $x < $arrlength; $x++) { /*"for" berfungsi untuk mencetak nilai - nilai array diindex*/
    echo $cars[$x]; //berfungsi untuk menjalankan for
    echo "<br>"; //"<br>" untuk memindahkan baris
    //"echo" untuk menampilkan teks ke layar
}
?><!--untuk menutup program-->
<!--Fungsi Array yaitu variabel untuk menyimpan nilai lebih dari 1 dalam satu waktu-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->

