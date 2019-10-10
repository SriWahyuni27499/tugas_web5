<?php declare(strict_types=1); // untuk menentukan strict maka harus mengatur declare ?>

<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag <?php>" untuk membuka program php*/
function setHeight(int $minheight = 50) {//function dengan satu argument " $minheight" untuk mengatur tinggi minimal yaitu 50
    echo "The height is : $minheight <br>"; // menampilkan value string dengan variabel $minheight diikuti pindah baris
}

setHeight(350);//mecetak dengan set value yang telah ditetapkan
setHeight();//mencetak function yang telah di set
setHeight(135);//mencetak dengan set value yang telah ditetapkan
setHeight(80);//mencetak dengan set value yang telah ditetapkan
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->