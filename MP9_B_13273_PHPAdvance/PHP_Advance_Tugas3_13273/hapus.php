<?php
require 'koneksi.php';
$id = $_GET['id']??'';
if($id===''|| !ctype_digit($id)){
    echo'!! ID tidak valid. !!';
}else{
    $query = 'DELETE FROM buku WHERE id = ?';
    $stmt= mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($stmt,'i', $id);
    mysqli_stmt_execute($stmt);
    if(mysqli_stmt_affected_rows( $stmt)===1){
        echo 'tampilan Data berhasil dihapus';
    }else{
        echo 'tampilan DATA tidak ditemukan';
        
}
}

echo '<a href="index.php">Kembali</a>';

?>