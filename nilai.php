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
            <a href="addnilai.php" type="button" class="btn btn-success text-white btn-sm">
              Tambah Nilai
            </a>
            <table class="table ">
              <thead>
                <tr style="text-align: center;">
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Nilai Ulangan</th>
                  <th>Nilai UTS</th>
                  <th>Nilai UAS</th>
                  <th>Nilai Akhir</th>
                  <th>Nama Guru</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="list">

                <?php
                $no = 0;
                $sql = "SELECT * FROM nilai JOIN siswa
ON nilai.nis = siswa.nis
JOIN guru_mapel
ON nilai.id_guru_mapel = guru_mapel.id
JOIN guru
ON guru_mapel.nip = guru.nip
JOIN mapel
ON guru_mapel.id_mapel = mapel.id_mapel ";
                $query = mysqli_query($db, $sql);
                while ($m = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr style="text-align: center;">
                    <td><?= $no; ?></td>
                    <td><?= $m['nis'] ?></td>
                    <td><?= $m['nama'] ?></td>
                    <td><?= $m['nilai_ulangan'] ?></td>
                    <td><?= $m['nilai_uts'] ?></td>
                    <td><?= $m['nilai_uas'] ?></td>
                    <td><?= $m['nilai_akhir'] ?></td>
                    <td><?= $m['nama_guru'] ?></td>
                    <td class="text-center">
                      <a href="editnilai.php?id=<?php print $m['nis'] ?>" type="button" class="btn btn-success text-white btn-sm" style="color:limegreen">edit
                      </a>
                      <a href="deletenilai.php?id=<?php print $m['nis'] ?>" type="button" class="btn btn-danger text-white btn-sm" style="color:red" onclick="return confirm('Are you sure to delete this row ?')">
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