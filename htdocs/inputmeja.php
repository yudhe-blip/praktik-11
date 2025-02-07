<?php
if  (isset($_POST['submit'])) {
    include_once('koneksiresto.db.php');
    $NamaMeja=mysqli_real_escape_string($kon,$_POST['NamaMeja']);
    $sql="INSERT INTO 'mejapesanan' ('NamaMeja') VALUES ('".$NamaMeja"')";
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