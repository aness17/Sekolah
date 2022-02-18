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
            <a href="addgurumapel.php" type="button" class="btn btn-success text-white btn-sm">
              Tambah Guru Mapel
            </a>
            <table class="table ">
              <thead>
                <tr style="text-align: center;">
                  <th>ID</th>
                  <th>NIP</th>
                  <th>Nama Guru</th>
                  <th>Mata Pelajaran</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="list">

                <?php
                $id = 0;
                $sql = "SELECT * FROM guru_mapel JOIN mapel 
                        ON guru_mapel.id_mapel = mapel.id_mapel
                        JOIN guru
                        ON guru_mapel.nip = guru.nip";
                $query = mysqli_query($db, $sql);
                while ($m = mysqli_fetch_array($query)) {
                  $id++;
                ?>
                  <tr style="text-align: center;">
                    <td><?= $id; ?></td>
                    <td><?= $m['nip'] ?></td>
                    <td><?= $m['nama_guru'] ?></td>

                    <td><?= $m['nama_mapel'] ?></td>

                    <td class="text-center">
                      <a href="edit_guru_matpel.php?id=<?php print $m['nip'] ?>" type="button" class="btn btn-success text-white btn-sm" style="color:limegreen">edit
                      </a>
                      <a href="delete_guru_matpel.php?id=<?php print $m['nip'] ?>" type="button" class="btn btn-danger text-white btn-sm" style="color:red" onclick="return confirm('Are you sure to delete this row ?')">
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