<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
// Check if the type of a variable is integer   
$x = 5985; //untuk mendeklarasi variabel $x dengan value integer
var_dump(is_int($x)); // kode program "var_dump" mengembalikan fungsi tipe data dan nilai

echo "<br>"; //untuk menampilkan output diikuti pindah baris

// Check again... 
$x = 59.85; //untuk mendeklarasi variabel $x dengan value integer
var_dump(is_int($x)); // kode program "var_dump" mengembalikan fungsi tipe data dan nilai
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
