<section class="content">

    <div class="card card-default" style="margin-left:20em; margin-top: 1em; width:70%;">
        <div class="card">
            <div class="pesan" id="pesan">
                <?php if (session()->getFlashdata('pesan')): ?>
                    <div class="alert alert-success d-flex justify-content-between align-items-center" role="alert">
                        <span><?= session()->getFlashdata('pesan'); ?></span>
                        <a href="http://localhost/Nodin/public/surat/infosurat" class="btn btn-sm btn-outline-light" style="text-decoration: none;">Lihat Detail</a>
                    </div>
                <?php endif; ?>
            </div>


            <div class="card-header">
                <h3 class="card-title">Edit Surat</h3>

                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo form_open('surat/update_surat/' . $surat['id']);
                        ?>
                        <!-- <form action="<?= site_url('surat/update_surat/' . $surat['id']) ?>" method="POST"> -->
                        <div class="form-group">

                            <label> Kepada </label>
                            <input name="kepada" class="form-control" type="text" value="<?= $surat['kepada'] ?>">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Pembuat</label>
                            <input name="pembuat" class="form-control" type="text" value="<?= $surat['pembuat'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Sifat</label>
                            <input name="sifat" class="form-control" type="text" value="<?= $surat['sifat'] ?>">
                        </div>
                        <div class="form-group">
                            <label>No.Surat</label>
                            <input name="no_surat" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="disposisi" <?= $surat['status'] === 'disposisi' ? 'selected' : '' ?>>disposisi</option>
                                <option value="disetujui" <?= $surat['status'] === 'disetujui' ? 'selected' : '' ?>>disetujui</option>
                                <option value="ditolak" <?= $surat['status'] === 'ditolak' ? 'selected' : '' ?>>ditolak</option>
                            </select>

                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="card-body" style="margin-top: -1.3rem;">
                        <div class="form-group">
                            <label> Hal </label>
                            <input name="hal" class="form-control" value="<?= $surat['hal'] ?>">
                        </div>
                        <div class="form-group">
                            <label> Tembusan </label>
                            <input name="tembusan" class="form-control" type="text" value="<?= $surat['tembusan'] ?>">
                        </div>

                        <div class="form-group">
                            <label> Lampiran </label>
                            <input name="lampiran" class="form-control" type="text" value="<?= $surat['lampiran'] ?>">
                        </div>


                        <!-- Date -->
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date">
                                <input name="tanggal" type="date" class="form-control " value="<?= $surat['tanggal'] ?>">
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="form-group">
                    <label for="">Catatan</label>
                    <textarea name="catatan" class="form-control"><?= $surat['catatan'] ?>

                    </textarea>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <!-- <button type="reset" class="btn btn-danger">Cancel</button> -->

                    </div>
                    <button type="submit" class="btn btn-default" formaction="<?= site_url('surat/info_surat') ?>">Kembali</button>
                </div>
                <?php
                echo form_close();
                ?>
            </div>
            <!-- /.col -->
        </div>


        <!-- /.row -->