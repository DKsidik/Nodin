<style>
  .card {
    margin-left: 17em;
    margin-top: 2em;
    width: 80%;
  }

  .card {
    margin-left: 17em;
    margin-top: 1em;
    width: 80%;
  }

  .alert {
    opacity: 0;
    transition: opacity 0.5s ease;
    /* Smooth transition for fade in/out */
  }

  .alert.show {
    opacity: 1;
  }
</style>

<section class="content" style="width: 50%;">
  <div class="pesan" id="pesan">
    <?php if (session()->getFlashdata('pesan')): ?>
      <div class="alert alert-danger   d-flex justify-content-between align-items-center" role="alert">
        <span><?= session()->getFlashdata('pesan'); ?></span>
        <!-- <a href="http://localhost/Nodin/public/surat/info_surat" class="btn btn-sm btn-outline-light" style="text-decoration: none;">Lihat Detail</a> -->
      </div>
    <?php endif; ?>
  </div>
</section>



<section class="content" style="padding: 1em;">
  <!-- Default box -->
  <div class="card">

    <div class="card-header">
      <h3 class="card-title">Info Surat</h3>

      <div class="card-tools">

      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th style="width: 1%">
              No
            </th>
            <th style="width: 20%">
              Perihal
            </th>
            <th style="width: 20%">
              Pembuat
            </th>
            <th style="width: 20%">
              Status
            </th>
            <th style="width: 20%">
              Sifat
            </th>
            <th style="width: 20%">
              tombol
            </th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1 ?>
          <?php foreach (array_reverse($surat) as $key) { ?>
            <tr>
              <td>

                <a><?= $no++ ?></a>
              </td>
              <td>
                <a>
                  <?= $key['hal'] ?>
                </a>
                <br />
                <small>
                  Created <?= $key['tanggal'] ?>
                </small>
              </td>
              <td>
                <a>
                  <?= $key['pembuat'] ?>
                </a>
                </ul>
              </td>
              <td class="project_progress">
                <span class="badge badge-success">Disposisi</span>
              </td>
              <td>
                <a>
                  <?= $key['sifat'] ?>
                </a>
              </td>
              <td class="project-actions text-center d-flex">
                <a class="btn btn-primary btn-sm mr-1" href="http://localhost/Nodin/public/surat/print_surat/<?= $key['id'] ?>" target="_surat">
                  <i class="fas fa-folder"></i> View
                </a>
                <a class="btn btn-info btn-sm mr-1" href="#">
                  <i class="fas fa-pencil-alt"></i> Edit
                </a>
                <form action="http://localhost/Nodin/public/surat/delete/<?= $key['id'] ?>" method="post" style="display: inline;">
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?');">
                    <i class="fas fa-trash"></i> Delete
                  </button>
                </form>
              </td>

            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const alertBox = document.querySelector(".alert"); // Select the .alert div directly
    if (alertBox) {
      // Show the alert with a smooth effect
      setTimeout(() => {
        alertBox.classList.add("show");
      }, 100); // Small delay to ensure DOM is ready

      // Set timeout for 5 seconds, then fade out smoothly
      setTimeout(() => {
        alertBox.classList.remove("show");
      }, 5000);
    }
  });
</script>