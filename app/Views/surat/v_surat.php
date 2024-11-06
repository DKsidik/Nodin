<style>
  .card {
    margin-left: 17em;
    margin-top: 2em;
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


<section class="content">



  <!-- Default box -->
  <div class="card">
    <div class="pesan" id="pesan">
      <?php
      if (session()->getFlashdata('pesan')) {
        echo ' <div class="alert alert-success" role="alert">';
        echo   session()->getFlashdata('pesan');
        echo '</div>';
      }
      ?>
    </div>

    <div class="card-header">
      <h3 class="card-title">Info Surat</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
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
          <?php foreach ($surat as $key) { ?>
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
                <!-- <ul class="list-inline">
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src=<?= base_url("template/dist/img/avatar.png"); ?>>
                </li>
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src=<?= base_url("template/dist/img/avatar2.png"); ?>>
                </li>
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src=<?= base_url("template/dist/img/avatar3.png"); ?>>
                </li>
                <li class="list-inline-item">
                  <img alt="Avatar" class="table-avatar" src=<?= base_url("template/dist/img/avatar4.png"); ?>>
                </li> -->
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
                <a class="btn btn-primary btn-sm mr-1" href="#">
                  <i class="fas fa-folder">
                  </i>
                  View
                </a>
                <a class="btn btn-info btn-sm mr-1" href="#">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                  <i class="fas fa-trash">
                  </i>
                  Delete
                </a>
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