<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$txt1 = "Learn PHP"; //untuk mendeklarasi variabeel $txt1 ke value string
$txt2 = "W3Schools.com"; //untuk mendeklarasi variabeel $txt2 ke value string
$x = 5;//untuk mendeklarasi variabeel $x ke value integer
$y = 4;//untuk mendeklarasi variabeel $y ke value integer

print "<h2>" . $txt1 . "</h2>";//untuk menampilkan variabel $txt1 dengan value string judul dengan font h2
print "Study PHP at " . $txt2 . "<br>";//untuk menampilkan variabel $txt2 dengan value string diikuti syntax pindah baris "<br>"
print $x + $y;//untuk menampilkan hasil perhitungan variabel $x + $y dengan value integer
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
