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
                        <h5 class="card-title">Tambah Guru Matapelajaran</h5>

                        <?php
                        include 'koneksi.php'; ?>

                        <!-- Browser Default Validation -->
                        <form class="row" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="validationDefault01" class="form-label">NIP</label>
                                <select name="nip" id="nip" class="form-control">

                                    <?php
                                    $sql = "SELECT * FROM guru";

                                    $query = mysqli_query($db, $sql);

                                    while ($m = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                                    ?>

                                        <option value="<?= $m['nip'] ?>"><?= $m['nip'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">ID Matapelajaran</label>
                                <select name="id_mapel" id="id_mapel" class="form-control">

                                    <?php
                                    $sql = "SELECT * FROM mapel";

                                    $query = mysqli_query($db, $sql);

                                    while ($m = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                                    ?>

                                        <option value="<?= $m['id_mapel'] ?>"><?= $m['nama_mapel'] ?></option>
                                    <?php } ?>
                                </select>

                            </div>

                            <div class="form-group mb-3">
                                <button class="btn btn-primary" name="save" type="submit">Tambah Data</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['save'])) {
                            $db->query("INSERT INTO guru_mapel(nip,id_mapel)
                                            Values('$_POST[nip]','$_POST[id_mapel]')");

                            echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='guru_matpel.php';1</script>";
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