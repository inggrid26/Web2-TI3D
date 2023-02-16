<?php if (isset($_GET['username'])) : ?>
    <?php
    $username = $_GET['username'];
    $sql = $con->query("SELECT * FROM user WHERE username = '$username'");
    $data = $sql->fetch();
    ?>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5>Edit User</h5>
                    <form action="index.php?page=user_update" method="POST">
                        <div class="mb-2">
                            <label for="" class="form-label">username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan username" value="<?= $data['username'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">password</label>
                            <input type="text" name="password" class="form-control" placeholder="Masukan password" value="<?= $data['password'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Level</label>
                            <select name="level" id="" class="form-select">
                                <option <?= ($data['level'] == "admin" ? "selected" : "") ?>>admin</option>
                                <option <?= ($data['level'] == "user" ? "selected" : "") ?>>user</option>
                                
                            </select>
                        </div>
                        <hr>
                        <div class="mb-2">
                            <a href="index.php?page=user" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


