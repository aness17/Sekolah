<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>



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
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library.
                            Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

                        <!-- Table with stripped rows -->
                        <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <!-- <th>Password</th> -->
                                    <th>No. Hp</th>
                                    <th>Alamat</th>
                                    <th>Catatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="list">

                                <?php $no = 1;
                                // $user = $this->db->query("SELECT * FROM user where fk_role = '2'");
                                foreach ($outlet as $outlets) : ?>
                                    <tr style="text-align: center;">
                                        <td><?= $no; ?></td>
                                        <td><?= $outlets['id_cs'] ?></td>
                                        <td><?= $outlets['nama_cs'] ?></td>
                                        <td><?= $outlets['email_cs'] ?></td>
                                        <!-- <td><?= $outlets['passwd_cs'] ?></td> -->
                                        <td><?= $outlets['nohp_cs'] ?></td>
                                        <td><?= $outlets['alamat_cs'] ?></td>
                                        <td><?= $outlets['catatan'] ?></td>

                                    </tr>
                                <?php $no++;
                                endforeach; ?>
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