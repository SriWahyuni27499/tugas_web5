<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>"; // untuk menampilkan variabel $fname, variabel $year, dan diikuti pindah baris
}
// "()" kode program untuk mengeksekusi kode
// "{}" untuk menunjukkan kode fungsi

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
//Nama-nam dan tahun yang digunakan dalam fungsi atau yang dideklarasi
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
