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
                        <h5 class="card-title">Edit Nilai</h5>

                        <?php
                        include 'koneksi.php';
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM nilai where nis='$id'";
                        $query = mysqli_query($db, $sql);
                        while ($m = mysqli_fetch_array($query)) {
                        ?>
                            <!-- Browser Default Validation -->
                            <form class="row" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label for="validationDefault01" class="form-label">NIS Siswa</label>
                                    <input type="text" class="form-control" name="nis" id="validationDefault01" value="<?php print $m['nis'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationDefault03" class="form-label">Nilai Ulangan</label>
                                    <input type="text" class="form-control" name="nilai_ulangan" id="validationDefault03" value="<?php print $m['nilai_ulangan'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationDefault03" class="form-label">Nilai UTS</label>
                                    <input type="text" class="form-control" name="nilai_uts" id="validationDefault03" value="<?php print $m['nilai_uts'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationDefault03" class="form-label">Nilai UAS</label>
                                    <input type="text" class="form-control" name="nilai_uas" id="validationDefault03" value="<?php print $m['nilai_uas'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationDefault03" class="form-label">Nilai Akhir</label>
                                    <input type="text" class="form-control" name="nilai_akhir" id="validationDefault03" value="<?php print $m['nilai_akhir'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="validationDefault03" class="form-label">ID GURU Matapelajaran</label>
                                    <input type="text" class="form-control" name="id_guru_mapel" id="validationDefault03" value="<?php print $m['id_guru_mapel'] ?>">
                                </div>

                                <div class="form-group mb-3">
                                    <button class="btn btn-primary" name="save" type="submit">Ubah Data</button>
                                </div>
                            <?php } ?>
                            </form>
                            <?php

                            if (isset($_POST['save'])) {
                                $id = $_POST['nis'];
                                $nilai_ulangan = $_POST['nilai_ulangan'];
                                $nilai_uts = $_POST['nilai_uts'];
                                $nilai_uas = $_POST['nilai_uas'];
                                $nilai_akhir = $_POST['nilai_akhir'];
                                $id_guru_mapel = $_POST['id_guru_mapel'];

                                if (!empty($id) && !empty($nilai_ulangan) && !empty($nilai_uts) && !empty($nilai_uas) && !empty($nilai_akhir) && !empty($nilai_guru_mapel)) {
                                    $sql = "UPDATE nilai SET nilai_ulangan='$nilai_ulangan', nilai_uts='$nilai_uts',nilai_uas='$nilai_uas',nilai_akhir='$nilai_akhir', id_guru_mapel='$id_guru_mapel' WHERE nis='$id'";
                                    $query = mysqli_query($db, $sql);
                                    echo "<script>alert('Data Berhasil Diubah');window.location.href='nilai.php';1</script>";
                                } else {
                                    $sql = "UPDATE nilai SET nilai_ulangan='$nilai_ulangan', nilai_uts='$nilai_uts',nilai_uas='$nilai_uas',nilai_akhir='$nilai_akhir', id_guru_mapel='$id_guru_mapel' WHERE nis='$id'";
                                    echo "<script>alert('Data Gagal Diubah');window.location.href='nilai.php';1</script>";
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