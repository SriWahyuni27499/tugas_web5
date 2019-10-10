<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
function sum(int $x, int $y) {
    $z = $x + $y; //hasil perhitungan dari $x+$y dengan variabel $z
    return $z;// untuk mengembalikan hasil penjumlahan
}

echo "5 + 10 = " . sum(5,10) . "<br>"; // untuk menampilkan output berupa integer diikuti pindah baris
echo "7 + 13 = " . sum(7,13) . "<br>";  // untuk menampilkan output berupa integer diikuti pindah baris
echo "2 + 4 = " . sum(2,4); // untuk menampilkan output berupa integer
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
