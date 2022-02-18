<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'koneksi.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Nama Mapel</th>
                                    <th>Nama Guru</th>
                                    <th>NA</th>
                                </tr>
                            </thead>
                            <tbody class="list">

                                <?php
                                $no = 0;
                                $sql = "SELECT * FROM nilai_siswa ";
                                $query = mysqli_query($db, $sql);
                                while ($m = mysqli_fetch_array($query)) {
                                    $no++;
                                ?>
                                    <tr style="text-align: center;">
                                        <td><?= $no; ?></td>
                                        <td><?= $m['nis'] ?></td>
                                        <td><?= $m['nama'] ?></td>
                                        <td><?= $m['kelas'] ?></td>
                                        <td><?= $m['nama_mapel'] ?></td>
                                        <td><?= $m['nama_guru'] ?></td>
                                        <td><?= $m['nilai_akhir'] ?></td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php include 'footer.php'; ?>