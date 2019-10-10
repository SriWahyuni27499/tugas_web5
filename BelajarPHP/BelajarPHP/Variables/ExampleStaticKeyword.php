<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
function myTest() { //Function yang bernama "myTest"
    static $x = 0; // variabel $x yang di set dari nol (0)
    echo $x; //perintah untuk menampilkan variable $x
    $x++; //looping atau perulangan
}

myTest(); //untuk menjalankan "function myTest"
echo "<br>"; //untuk menam[pilkan output dengan diikuti pindah baris
myTest(); //untuk menjalankan "function myTest"
echo "<br>"; //untuk menam[pilkan output dengan diikuti pindah baris
myTest(); //untuk menjalankan "function myTest"
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->

