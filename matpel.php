<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'koneksi.php'; ?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Tables</h1>

  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            <a href="addmatpel.php" type="button" class="btn btn-success text-white btn-sm">
              Tambah Mapel
            </a>
            <table class="table ">
              <thead>
                <tr style="text-align: center;">
                  <th>ID</th>
                  <th>Nama Mata Pelajaran</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="list">

                <?php
                $no = 0;
                $sql = "SELECT * FROM mapel ";
                $query = mysqli_query($db, $sql);
                while ($m = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr style="text-align: center;">
                    <td><?= $m['id_mapel'] ?></td>
                    <td><?= $m['nama_mapel'] ?></td>
                    <td class="text-center">
                      <a href="editmatpel.php?id=<?php print $m['id'] ?>" type="button" class="btn btn-success text-white btn-sm" style="color:limegreen">edit
                      </a>
                      <a href="deletematpel.php?id=<?php print $m['id'] ?>" type="button" class="btn btn-danger text-white btn-sm" style="color:red" onclick="return confirm('Are you sure to delete this row ?')">
                        Hapus</a>
                    </td>
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