<?php
include("koneksi.php");

$as = mysqli_query("select * from komen order by id desc");
while($sr = mysqli_fetch_array($as)) {
    ?>
    <p><?=$r['tanggal'];?>
    <br><?=$r['nama'];?>
    <br><?=$r['email'];?>
    <br><?=$r['komentar'];?>
    <?php
}
?>