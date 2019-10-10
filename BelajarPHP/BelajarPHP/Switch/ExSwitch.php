<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
$favcolor = "red"; //mendeklarasi variabel $favcolor

switch ($favcolor) { //untuk memilih salah satu blok yang akan dieksekusi
    case "red": //untuk label pertama
        echo "Your favorite color is red!";
        break; //berhenti sejenak
    case "blue": //untuk label kedua
        echo "Your favorite color is blue!";
        break;//berhenti sejenak
    case "green"://untuk label ketiga
        echo "Your favorite color is green!";
        break;//berhenti sejenak
    default: // normal
        echo "Your favorite color is neither red, blue, nor green!";
}
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
