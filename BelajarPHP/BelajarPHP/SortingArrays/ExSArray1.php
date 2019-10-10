<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$cars = array("Volvo", "BMW", "Toyota");
sort($cars); // mengurutkan data dari yang terkecil

$clength = count($cars); // cari jumlah array
for($x = 0; $x < $clength; $x++) { // looping array
    echo $cars[$x];
    echo "<br>";
}
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
