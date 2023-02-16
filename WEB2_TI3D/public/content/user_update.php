<?php
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$level = $_POST['level'];
$allowed_levels = array("admin", "user");

//cek kosong
if (empty($username) || empty($password)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'index.php?page=user';
        </script>";
} else {


    //update 
    $sql = "UPDATE user SET username = :username, password = :password WHERE level = :level";
    $simpan = $con->prepare($sql);
    #bind
    $simpan->bindParam('username', $username);
    $simpan->bindParam('password', $password);
    $simpan->bindParam('level', $level);
    # execute
    $simpan->execute();

    if ($simpan->rowCount() > 0) {
        echo "<script>
            alert('data berhasil diubah');
            window.location.href = 'index.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diubah');
            window.location.href = 'index.php?page=user';
        </script>";
    }
}
