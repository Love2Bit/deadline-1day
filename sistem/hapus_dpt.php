<?php

include '../koneksi.php';

$nim= $_GET['nim'];

mysqli_query($koneksi,"DELETE FROM tbl_dpt WHERE nim='$nim'");

header("location:upload_dpt.php");

?>
