<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$x = 75; // mendeklarasi variabel $x dengan value integer
$y = 25; // mendeklarasi variabel $y dengan value integer

function addition() { //Function yang bernama "addition"
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; //$GLOBALS menggunakan case-sensitif tidak ada pengaruh tetapi tanda [] untuk memanggil value variabel
}

addition(); //untuk menjalankan function addition 
echo $z;//untuk menampilkan output variabel $z
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
