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

                        <!-- Browser Default Validation -->
                        <form class="row" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="validationDefault01" class="form-label">NIP</label>
                                <input type="text" class="form-control" name="nip" id="validationDefault01" placeholder="123xxxx" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">ID Matapelajaran</label>
                                <input type="text" class="form-control" name="id_mapel" id="validationDefault03" placeholder="nama guru matapelajaran" required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <button class="btn btn-primary" name="save" type="submit">Tambah Data</button>
                            </div>
                        </form>
                        <?php

                        include 'koneksi.php';

                        if (isset($_POST['save'])) {
                            $db->query("INSERT INTO guru_mapel(nip,id_mapel)
                                            Values('$_POST[nip]','$_POST[id_mapel]')");

                            echo "<script>alert('Siswa Berhasil Ditambahkan');window.location.href='guru_matpel.php';1</script>";
                        }
                        ?>
                        <!-- End Browser Default Validation -->

                    </div>
                </div>

            </div>
            <?php include 'footer.php'; ?>
