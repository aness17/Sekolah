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
                                <label for="validationDefault01" class="form-label">Nama</label>
                                <?php
                                include 'koneksi.php'; ?>

                                <!-- Browser Default Validation -->

                                <select name="nis" id="nis" class="form-control">

                                    <?php
                                    $sql = "SELECT * FROM siswa";

                                    $query = mysqli_query($db, $sql);

                                    while ($m = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                                    ?>

                                        <option value="<?= $m['nis'] ?>"><?= $m['nama'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nilai ulangan</label>
                                <input type="number" class="form-control" name="nilai_ulangan" id="validationDefault03" placeholder="nilai ulangan" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nilai UTS</label>
                                <input type="number" class="form-control" name="nilai_uts" id="validationDefault03" placeholder="nilai uts" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nilai UAS</label>
                                <input type="number" class="form-control" name="nilai_uas" id="validationDefault03" placeholder="nilai uas" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nama Guru Matapelajaran</label>

                                <!-- Browser Default Validation -->

                                <select name="id_guru_mapel" id="id_guru_mapel" class="form-control">

                                    <?php
                                    $sql = "SELECT guru_mapel.id as id, guru.nama_guru as nama FROM guru_mapel JOIN guru ON guru_mapel.nip= guru.nip";

                                    $query = mysqli_query($db, $sql);

                                    while ($m = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                                    ?>

                                        <option value="<?= $m['id'] ?>"><?= $m['nama'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>


                            <div class="form-group mb-3">
                                <button class="btn btn-primary" name="save" type="submit">Tambah Data</button>
                            </div>
                        </form>
                        <?php
                        // (nilai_ulangan = 20%, nilai uts =30%, dan nilai uas = 50%)
                        if (isset($_POST['save'])) {
                            $nilai_akhir = (0.2 * $_POST['nilai_ulangan']) + (0.3 * $_POST['nilai_uts']) + (0.5 * $_POST['nilai_uas']);
                            $sql = "INSERT INTO nilai(nis,nilai_ulangan,nilai_uts,nilai_uas,nilai_akhir,id_guru_mapel)
                                            Values('$_POST[nis]','$_POST[nilai_ulangan]','$_POST[nilai_uts]',
                                            '$_POST[nilai_uas]','$nilai_akhir','$_POST[id_guru_mapel]')";
                            $db->query($sql);
                            // echo $sql;
                            // die;
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