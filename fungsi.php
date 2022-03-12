<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Fungsi</title>
</head>
<body>
    <?php
    // membuat fungsi php
    function penjumlahan($angka1, $angka2)
    {
        $a= $angka1;
        $b= $angka2;
        $hasil= $a+$b;
        return $hasil;

    }
    // memanggil fungsi pertama
    $hasil = penjumlahan(3,4);
    echo "Penjumlahan dari 3 + 4 = $hasil" echo "<hr>";
    // memanggil fungsi kedua
    echo "penjumlahan dari 2 + 3 adalah ".penjumlahan(2,3); echo "<hr>";
    // memanggil fungsi ketiga
    echo "penjumlahan dari 8 + 4 adalah ".penjumlahan(8,4);

    ?>

</body>
</html>