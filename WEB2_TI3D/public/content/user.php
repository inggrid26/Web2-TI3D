<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5>Data User</h5>
                <hr>
                <!-- Button trigger modal -->
                <div align="center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formUser">
                    Tambah User
                </button>
                </div>
                
                <table class="mt-2 table table-bordered">
                    <thead class="bg-dark">
                        <tr style="color:white;">
                            <th>No</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $con->query("SELECT * FROM user");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                                    <td>$no</td>
                                    <td>$row[username]</td>
                                    <td>$row[level]</td>
                                    <td>
                                        <a href='index.php?page=user_edit&username=$row[username]' class='btn btn-sm btn-warning'>Edit</a>
                                        <a href='index.php?page=user_delete&username=$row[username]' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus data ini?')\">Delete</a>
                                    </td>
                                </tr>";
                            $no++;
                            // delete -> nim -> delete where nim
                            // edit -> nim -> cari data where nim -> tampilkan ke form -> update
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=user_save" method="POST">
                    <div class="mb-2">
                        <label for="" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Masukan Password">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Level</label>
                        <select name="level" id="" class="form-select">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>