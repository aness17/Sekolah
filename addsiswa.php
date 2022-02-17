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

                        <!-- Browser Default Validation -->
                        <form class="row" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="validationDefault01" class="form-label">NIS Siswa</label>
                                <input type="text" class="form-control" name="nis" id="validationDefault01" placeholder="123xxxx" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" name="nama" id="validationDefault03" placeholder="Nana" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Kelas Siswa</label>
                                <input type="text" class="form-control" name="kelas" id="validationDefault03" placeholder="10 IPA 1" required>
                            </div>

                            <div class="form-group mb-3">
                                <button class="btn btn-primary" name="save" type="submit">Tambah Data</button>
                            </div>
                        </form>
                        <?php

                        include 'koneksi.php';

                        if (isset($_POST['save'])) {
                            $db->query("INSERT INTO siswa(nis,nama,kelas)
											Values('$_POST[nis]','$_POST[nama]','$_POST[kelas]')");

                            echo "<script>alert('Siswa Berhasil Ditambahkan');window.location.href='siswa.php';1</script>";
                        }
                        ?>
                        <!-- End Browser Default Validation -->

                    </div>
                </div>

            </div>
            <?php include 'footer.php'; ?>