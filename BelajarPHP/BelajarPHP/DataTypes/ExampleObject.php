<!DOCTYPE html> <!--Berfungsi untuk memberikan informasi kepada web browser bahwa dokumen akan diproses HTML-->
<html><!--Tag untuk membuat sebuah dokumen HTML-->
<body><!--Tag untuk membuka sebuah halaman-->

<?php /*Tag untuk membuka program php*/
class Car { // kelas bernama "car"
    function Car() { //function dengan nama "car"
        $this->model = "VW"; //$this merupakan variabel dengan value string "VW"
    }
}
// Untuk membuat sebuah objek
$herbie = new Car();

//  Untuk menampilkan properti objek
echo $herbie->model;
?><!--untuk menutup program-->

</body> <!--Tag untuk menutup tubuh dari sebuah halaman-->
</html> <!--Tag untuk menutup sebuah dokumen HTML-->
