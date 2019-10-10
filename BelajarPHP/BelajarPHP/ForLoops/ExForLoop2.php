<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
for ($x = 0; $x <= 10; $x++) { //menginisi
$colors = array("red", "green", "blue", "yellow"); //mendeklarasi variabel $colors dengan value array

foreach ($colors as $value) { //loop yang bekerja pada array saja
  echo "$value <br>"; //untuk menampilkan variabel $value dengan pindah baris
}
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
