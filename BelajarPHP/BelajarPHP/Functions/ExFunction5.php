<?php declare(strict_types=1); // untuk menentukan strict maka harus mengatur declare
/*Tag <?php>" untuk membuka program php*/
function addNumbers(int $a, int $b) {//fungsi dengan satu argument (interger $a, integer $b)
    return $a + $b;//pernyataan yang memerintah untuk mengakhiri eksekusi function tanpa memanggil function
}
// "{}" untuk menunjukkan kode fungsi

echo addNumbers(5, "5 days"); 
// untuk menampilkan hasil ketika TIDAK diaktifkan "5 hari" maka diubah menjadi int (5), dan itu akan mengembalikan 10
?><!--untuk menutup program-->
