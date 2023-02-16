<?php
if (isset($_GET['username'])) {

    $username = $_GET['username'];
    //delete

    $delete = $con->query("DELETE FROM user WHERE username = '$username'");

    if ($delete->rowCount() > 0) {
        echo "<script>
            alert('data berhasil dihapus');
            window.location.href = 'index.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
            window.location.href = 'index.php?page=user';
        </script>";
    }
}
