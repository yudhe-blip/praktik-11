<?php
if  (isset($_POST['submit'])) {
    include_once('koneksiresto.db.php');
    $NamaPesanan=mysqli_real_escape_string($kon,$_POST['NamaPesanan']);
    $HargaSatuan=mysqli_real_escape_string($kon,$_POST['HargaSatuan']); 
    $HargaKhusus=mysqli_real_escape_string($kon,$_POST['HargaKhusus']);
    $sql="INSERT INTO `pesanan`( `NamaPesanan`, `HargaSatuan`, `HargaKhusus`) VALUES ('".$NamaPesanan."','".$HargaSatuan."','".$HargaKhusus."')";
    $q=mysqli_query($kon,$sql);
    if ($q) {
        echo "rekord tabel sudah disimpan !";
    } else {
        echo "rekord tabel gagal disimpan !";
    }
} else {
    echo "salah format API koneksi";
}
?>  