<?php
if  (isset($_POST['submit'])) {
    include_once('koneksiresto.db.php');
    $IdPesanan=mysqli_real_escape_string($kon,$_POST['IdPesanan']); 
    $KodeMeja=mysqli_real_escape_string($kon,$_POST['KodeMeja']);
    $JumlahPesanan=mysqli_real_escape_string($kon,$_POST['JumlahPesanan']);
    $sql= "INSERT INTO `Struck`( `IdPesanan`, `KodeMeja`, `JumlahPesanan`) VALUES ('".$IdPesanan."','".$KodeMeja."','".$JumlahPesanan."')";
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