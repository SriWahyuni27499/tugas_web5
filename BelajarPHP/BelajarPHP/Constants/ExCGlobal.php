<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
define("GREETING", "Welcome to W3Schools.com!");//berfungsi untuk membuat konstant define(name, value, case-insensitive)

function myTest() { //Function yang bernama "myTest"
    echo GREETING;//"echo" untuk menampilkan teks ke layar
}
 
myTest(); //untuk menjalankan "function myTest"
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->