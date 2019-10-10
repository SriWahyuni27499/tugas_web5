<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//Berikut merupakan array asosiatif yang menggunakan nama kunci yang telah ditetapkan.

foreach($age as $x => $x_value) { //foreach digunakan untuk mencetak semua nilai-nilai array assosiatif
    echo "Key=" . $x . ", Value=" . $x_value; //untuk menjalankan loop foreach
    echo "<br>"; //"<br>" untuk memindahkan baris
    //"echo" untuk menampilkan teks ke layar
}
?><!--untuk menutup program-->

<!--Fungsi Array yaitu variabel untuk menyimpan nilai lebih dari 1 dalam satu waktu-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->