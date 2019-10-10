<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers); // mengurutkan data dari yang terbesar

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) { // looping array
    echo $numbers[$x];
    echo "<br>";
}
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->