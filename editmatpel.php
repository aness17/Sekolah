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
                        <h5 class="card-title">Edit Mata Pelajaran</h5>

                        <?php
                        include 'koneksi.php';
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM mapel where id='$id'";
                        $query = mysqli_query($db, $sql);
                        while ($m = mysqli_fetch_array($query)) {
                        ?>
                            <!-- Browser Default Validation -->
                            <form class="row" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label for="validationDefault01" class="form-label">ID</label>
                                    <input type="text" class="form-control" name="id" id="validationDefault01" value="<?php print $m['id'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationDefault03" class="form-label">Nama Mata Pelajaran</label>
                                    <input type="text" class="form-control" name="nama_mapel" id="validationDefault03" value="<?php print $m['nama_mapel'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <button class="btn btn-primary" name="save" type="submit">Ubah Data</button>
                                </div>
                            <?php } ?>
                            </form>
                            <?php

                            if (isset($_POST['save'])) {
                                $id = $_POST['id'];
                                $nama_mapel = $_POST['nama_mapel'];

                                if (!empty($id) && !empty($nama_mapel)) {
                                    $sql = "UPDATE mapel SET nama_mapel='$nama_mapel' WHERE id='$id'";
                                    $query = mysqli_query($db, $sql);
                                    echo "<script>alert('Data Berhasil Diubah');window.location.href='matpel.php';1</script>";
                                } else {
                                    $sql = "UPDATE mapel SET nama_mapel='$nama_mapel' WHERE id='$id'";
                                    echo "<script>alert('Data Gagal Diubah');window.location.href='matpel.php';1</script>";
                                }
                            }
                            ?>
                            <!-- End Browser Default Validation -->

                    </div>
                </div>

            </div>
            <?php include 'footer.php'; ?>
