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
                        <h5 class="card-title">Tambah Nilai</h5>

                        <!-- Browser Default Validation -->
                        <form class="row" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="validationDefault01" class="form-label">nis</label>
                                <input type="text" class="form-control" name="nis" id="validationDefault01" placeholder="123xxxx" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nilai ulangan</label>
                                <input type="text" class="form-control" name="nilai_ulangan" id="validationDefault03" placeholder="nilai ulangan" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nilai UTS</label>
                                <input type="text" class="form-control" name="nilai_uts" id="validationDefault03" placeholder="nilai uts" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nilai UAS</label>
                                <input type="text" class="form-control" name="nilai_uas" id="validationDefault03" placeholder="nilai uas" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nilai Akhir</label>
                                <input type="text" class="form-control" name="nilai_akhir" id="validationDefault03" placeholder="nilai akhir" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">ID Guru Matapelajaran</label>
                                <input type="text" class="form-control" name="nilai_guru_mapel" id="validationDefault03" placeholder="id guru matapelajaran" required>
                            </div>


                            <div class="form-group mb-3">
                                <button class="btn btn-primary" name="save" type="submit">Tambah Data</button>
                            </div>
                        </form>
                        <?php

                        include 'koneksi.php';

                        if (isset($_POST['save'])) {
                            $db->query("INSERT INTO nilai(nis,nilai_ulangan,nilai_uts,nilai_uas,nilai_akhir,nilai_guru_mapel)
                                            Values('$_POST[nis]','$_POST[nilai_ulangan]','$_POST[nilai_uts]','$_POST[nilai_uas]','$_POST[nilai_akhir]','$_POST[id_guru_mapel]')");

                            echo "<script>alert('Nilai Berhasil Ditambahkan');window.location.href='nilai.php';1</script>";
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