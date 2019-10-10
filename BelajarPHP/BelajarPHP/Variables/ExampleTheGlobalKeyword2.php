<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$x = 5; // mendeklarasi variabel $x dengan value integer
$y = 10; // mendeklarasi variabel $y dengan value integer

function myTest() { //Function yang bernama "myTest"
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; //$GLOBALS menggunakan case-sensitif tidak ada pengaruh tetapi tanda [] untuk memanggil value variabel
} 

myTest(); //untuk menjalankan "function myTest"
echo $y; //untuk menampilkan variabel $y
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->

