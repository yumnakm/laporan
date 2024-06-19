<?php 
include "../conn/conn.php";

$id_laporan = $_POST['id_laporan'];
$keterangan = $_POST['keterangan'];

// Update status laporan menjadi 'DITOLAK' dan simpan keterangan penolakan
$query = "UPDATE laporan_kegiatan SET status='DITOLAK', keterangan_penolakan='$keterangan' WHERE id_laporan='$id_laporan'";
mysqli_query($conn, $query);

echo "<script>window.location.href='index.php?page=laporan_kegiatan';</script>";
exit;
?>
