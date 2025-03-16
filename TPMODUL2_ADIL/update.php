<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->

<?php
include('connect.php');

if (isset($_POST['update'])) {

    $id = $_GET['id'];

    $judul_baru = $_POST['judul'];
    $penulis_baru = $_POST['penulis'];
    $tahun_terbit_baru = $_POST['tahun_terbit'];

    $query = "UPDATE tb_buku SET 
            judul='$judul_baru', 
            penulis='$penulis_baru', 
            tahun_terbit='$tahun_terbit_baru'
            WHERE id=$id";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location.href='katalog_buku.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data: " . mysqli_error($conn) . "');</script>";
    }
}
?>
