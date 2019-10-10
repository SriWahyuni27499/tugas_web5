<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
function myTest() { //Function yang bernama "myTest"
    $x = 5; // ruang lingkup local
    echo "<p>Variable x inside function is: $x</p>"; //untuk menampilkan paragraf dan variabel $x
} 
myTest(); //untuk menjalankan "function myTest"

// Jika menggunakan x di luar function maka akan menghasilkan kesalahan atau akan terjadi error
echo "<p>Variable x outside function is: $x</p>"; //untuk menampilkan paragraf dan variabel $x
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->

