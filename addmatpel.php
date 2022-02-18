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
                        <h5 class="card-title">Tambah Mata Pelajaran</h5>

                        <!-- Browser Default Validation -->
                        <form class="row" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="validationDefault01" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id" id="validationDefault01" placeholder="123xxxx" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationDefault03" class="form-label">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" name="nama_mapel" id="validationDefault03" placeholder="nama matapelajaran" required>
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-primary" name="save" type="submit">Tambah Data</button>
                            </div>
                        </form>
                        <?php

                        include 'koneksi.php';

                        if (isset($_POST['save'])) {
                            $db->query("INSERT INTO mapel(id_mapel,nama_mapel)
                                            Values('$_POST[id_mapel]','$_POST[nama_mapel]')");

                            echo "<script>alert('Mata Pelajaran Berhasil Ditambahkan');window.location.href='matpel.php';1</script>";
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