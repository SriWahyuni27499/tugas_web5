<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$x = 5; //mendeklarasi variabel $x dengan value integer
$y = 10; //mendeklarasi variabel $y dengan value integer

function myTest() { //Function yang bernama "myTest"
    global $x, $y; //sebuah kunci untuk mengakses deklarasi di luar function
    $y = $x + $y; // penghitungan hasil dari variabel $y
} 

myTest(); //untuk menjalankan "function myTest"
echo $y; //untuk menampilkan output variabel $y
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
