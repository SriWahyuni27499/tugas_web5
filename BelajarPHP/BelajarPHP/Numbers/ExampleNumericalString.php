<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
// Periksa apakah variabelnya numerik   

$x = 5985; //mendeklarasi variabel $x dengan value integer
var_dump(is_numeric($x)); // kode program "var_dump" mengembalikan fungsi tipe data dan nilai

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello"; //mendeklarasi variabel $x dengan value string
var_dump(is_numeric($x)); // kode program "var_dump" mengembalikan fungsi tipe data dan nilai
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
