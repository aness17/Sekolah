<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Validation</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Validation</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Siswa</h5>

                        <?php
                        include 'koneksi.php';
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM guru_mapel where nip='$id'";
                        $query = mysqli_query($db, $sql);
                        while ($m = mysqli_fetch_array($query)) {
                        ?>
                            <form class="row" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label for="validationDefault01" class="form-label">NIP</label>
                                    <input type="text" class="form-control" name="nip" id="validationDefault01" value="<?php print $m['nip'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationDefault03" class="form-label">ID Matapelajaran </label>
                                    <input type="text" class="form-control" name="id_mapel" id="validationDefault03" value="<?php print $m['id_mapel'] ?>">
                                </div>


                                <div class="form-group mb-3">
                                    <button class="btn btn-primary" name="save" type="submit">Ubah Data</button>
                                </div>
                            <?php } ?>
                            </form>
                            <?php

                            if (isset($_POST['save'])) {
                                $id = $_POST['nip'];
                                $id_mapel = $_POST['id_mapel'];

                                if (!empty($id_mapel)) {
                                    $sql = "UPDATE guru_mapel SET id_mapel='$id_mapel' WHERE nip='$id'";
                                    $query = mysqli_query($db, $sql);
                                    echo "<script>alert('Data Berhasil Diubah');window.location.href='guru_matpel.php';1</script>";
                                } else {
                                    $sql = "UPDATE guru_mapel SET id_mapel='$id_mapel' WHERE nip='$id'";
                                    echo "<script>alert('Data Gagal Diubah');window.location.href='guru_matpel.php';1</script>";
                                }
                            }
                            ?>
                            <!-- End Browser Default Validation -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>