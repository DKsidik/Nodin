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
                        Pengaju
                    </th>
                    <th style="width: 20%">
                        Jenis Surat
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
                                Created <?= $key['tgl_buat'] ?>
                            </small>
                        </td>
                        <td>
                            <a>
                                <?= $key['pembuat'] ?>
                            </a>
                            </ul>
                        </td>
                        <td>
                            <a>
                                <?= $key['pengaju'] ?>
                            </a>
                            </ul>
                        </td>
                        <td>
                            <a>
                                <?= $key['jenis_surat'] ?>
                            </a>
                            </ul>
                        </td>
                        <td class="project_progress">
                            <?php
                            // Tentukan warna berdasarkan status
                            $badgeClass = '';
                            if ($key['status'] === 'disposisi') {
                                $badgeClass = 'badge-primary'; // Biru
                            } elseif ($key['status'] === 'disetujui') {
                                $badgeClass = 'badge-success'; // Hijau
                            } elseif ($key['status'] === 'ditolak') {
                                $badgeClass = 'badge-danger'; // Merah
                            }

                            // Pastikan catatan ada dan tidak kosong
                            $catatan = isset($key['catatan']) ? htmlspecialchars($key['catatan'], ENT_QUOTES, 'UTF-8') : 'Tidak ada catatan';
                            ?>
                            <span type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;"
                                class="badge <?= $badgeClass ?>"
                                data-note="<?= $key['catatan'] ?>" <!-- Add the data-id attribute -->

                                <?= $key['status'] ?>
                            </span>

                            <!-- Button trigger modal -->


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Catatan</h5>

                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a>
                                <?= $key['sifat'] ?>
                            </a>
                        </td>
                        <td class="project-actions text-center d-flex">
                            <a class="btn btn-primary btn-sm mr-1" href="javascript:void(0);"
                                onclick="previewSurat(
       <?= $key['jenis_surat'] === 'internal' ? "'print_surat_internal'" : "'print_surat'" ?>, 
       <?= $key['id'] ?>)">
                                <i class="fas fa-folder"></i> View
                            </a>


                            <a class="btn btn-info btn-sm mr-1 <?= ($key['status'] === 'disposisi' || $key['status'] === 'disetujui') ? 'disabled' : '' ?>"
                                href="<?= ($key['status'] === 'ditolak') ? "http://localhost/Nodin/public/surat/e_surat/{$key['id']}" : 'javascript:void(0);' ?>"
                                <?= ($key['status'] === 'disposisi' || $key['status'] === 'disetujui') ? 'tabindex="-1" aria-disabled="true"' : '' ?>>
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm mr-1 <?= ($key['status'] === 'disposisi' || $key['status'] === 'disetujui') ? 'disabled' : '' ?>"
                                href="<?= ($key['status'] === 'ditolak') ? "http://localhost/Nodin/public/surat/hapus/{$key['id']}" : 'javascript:void(0);' ?>"
                                <?= ($key['status'] === 'disposisi' || $key['status'] === 'disetujui') ? 'tabindex="-1" aria-disabled="true"' : '' ?>>
                                <i class="fas fa-trash"></i>
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

                    </div>
                    <div class="modal-body">
                        <iframe id="previewIframe" src="" style="width: 100%; height: 70vh; border: none;"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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

        }
    </script>
    <script>
        // This script runs when the modal is about to show
        var myModal = document.getElementById('exampleModal');
        myModal.addEventListener('show.bs.modal', function(event) {
            // Get the button that triggered the modal
            var button = event.relatedTarget;

            // Extract the custom data-id from the clicked button
            var note = button.getAttribute('data-note');

            // Now you can fetch data based on this id using AJAX or other methods
            // For demonstration, we will just show the id in the modal body
            var modalBody = myModal.querySelector('.modal-body');
            if (note && note.trim() !== '') {
                modalBody.textContent = note; // Display the note if it exists
            } else {
                modalBody.textContent = 'Catatan belum diisi'; // Display default message
            }
        });
    </script>


    <!-- <script>
    // Jika ingin menggunakan event listener alih-alih inline onclick
    document.querySelectorAll('.badge').forEach(badge => {
        badge.addEventListener('click', function() {
            const catatan = this.getAttribute('data-catatan');
            alert('Catatan: ' + catatan);
        });
    });
</script> -->