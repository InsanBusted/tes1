<!DOCTYPE html>
<html lang="en">
    <!-- Hyperlink -->
    <?php require_once('../koneksi.php') ?>
    <?php include_once('../models/meta.php') ?>
    <!-- akhir -->
    <body class="sb-nav-fixed">
        <!-- Header Top -->
        <?php include_once('../models/header.php') ?>
        <!-- Akhir -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- Sidebar -->
                <?php include_once('../models/sidebar.php') ?>
            </div>
            <!-- dashboard -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="table-responsive custom-table-responsive">
                                        <?php
                                        if (isset($_POST['nama'])) {
                                            $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (?,?)";
                                            $stmt = $dbh->prepare($sql);
                                            $stmt->execute([
                                                $_POST['nama'],
                                                $_POST['kec_id'],
                                            ]);
                                            echo "<script>alert('Data Telah ditambahkan')</script>";
                                            echo '<meta http-equiv="refresh" content="0; url=index.php">';
                                        }
                                        ?>

                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="nama">Nama Kelurahan</label>
                                                <input type="text" class="form-control" id="nama" name="nama" required placeholder="Isi Nama Kelurahan">
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="kec_id">Kecamatan ID</label>
                                                <input type="text" class="form-control" id="kec_id" name="kec_id" required placeholder="Isi Kecamatan ID">
                                            </div>
                                            <button class="btn btn-primary mt-2" type="submit">Tambah</button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once('../models/footer.php') ?>
            </div>
        </div>
    </body>
</html>
