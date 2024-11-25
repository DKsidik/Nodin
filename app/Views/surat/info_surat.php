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

    .modal-dialog.custom-width {

        max-width: 60%;
        /* Lebar modal 95% dari layar */
    }

    .modal-body iframe {
        height: 70vh;
        /* Tinggi iframe 70% dari tinggi layar */
    }
</style>




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
                            <a class="btn btn-primary btn-sm mr-1" href="javascript:void(0);"
                                onclick="previewSurat('print_surat_internal', <?= $key['id'] ?>)">
                                <i class="fas fa-folder"></i> View
                            </a>

                            <a class="btn btn-info btn-sm mr-1" href="http://localhost/Nodin/public/surat/edit_surat/<?= $key['id'] ?>">
                                <i class="fas fa-pencil-alt"></i>
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

        <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog custom-width">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewModalLabel">Preview Surat</h5>
                        <a class="btn btn-info btn-sm mr-1" href="http://localhost/Nodin/public/surat/edit_surat/<?= $key['id'] ?>">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                    </div>
                    <div class="modal-body">
                        <iframe id="previewIframe" src="" style="width: 100%; height: 70vh; border: none;"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
</div>




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

<script>
    function previewSurat(type, id) {
        // Tentukan URL untuk iframe
        let url = `http://localhost/Nodin/public/surat/${type}/${id}`;
        // Set src iframe ke URL yang sesuai
        document.getElementById('previewIframe').src = url;
        // Tampilkan modal
        let modal = new bootstrap.Modal(document.getElementById('previewModal'));
        modal.show();
    }
</script>