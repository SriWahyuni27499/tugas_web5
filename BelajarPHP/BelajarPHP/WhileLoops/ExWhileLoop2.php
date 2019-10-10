<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$x = 1; //mendeklarasi variabel $x

do {
    echo "The number is: $x <br>";//untuk menampilkan value string dan variabel $x diikuti perintah pindah baris
    $x++; //looping atau perulangan
} while ($x <= 5); 
//perulangan "do-while" merupakan pengecekan kondisi akan dilakukan di akhir perulangan, sehingga walaupun kondisi adalah FALSE, perulangan akan tetap berjalan minimal 1 kali
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->