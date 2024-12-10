<section class="content">

    <div class="card card-default" style="margin-left:20em; margin-top: 1em; width:70%;">
        <div class="card">
            <div class="pesan" id="pesan">
                <?php if (session()->getFlashdata('pesan')): ?>
                    <div class="alert alert-success d-flex justify-content-between align-items-center" role="alert">
                        <span><?= session()->getFlashdata('pesan'); ?></span>
                        <a href="http://localhost/Nodin/public/surat/info_surat" class="btn btn-sm btn-outline-light" style="text-decoration: none;">Lihat Detail</a>
                    </div>
                <?php endif; ?>
            </div>


            <div class="card-header">
                <h3 class="card-title">Surat Internal </h3>

                <div class="card-tools">
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="cetaKk_surat.php" method="POST">
                            <div class="form-group">
                                <label> Kepada </label>
                                <input name="kepada" class="form-control" type="text" placeholder=" Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan">
                            </div>


                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Pembuat</label>
                                <input type="text" name="pengaju" class="form-control" placeholder="Pengaju Surat">

                            </div>
                            <div class="form-group">
                                <label>Sifat</label>
                                <select name="sifat" class="form-control select2bs4" style="width: 100%;">
                                    <option selected="selected" disabled>--Pilih--</option>
                                    <option>Penting</option>
                                    <option>diperlukan</option>

                                </select>
                            </div>
                            <div class="form-group d-none">
                                <label>Sifat</label>
                                <input name="jenis" type="text" value="internal">

                                </select>
                            </div>
                            <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="card-body" style="margin-top: -1.3rem;">
                        <div class="form-group">
                            <label> Hal </label>
                            <input name="hal" class="form-control" type="text" placeholder="perihal">
                        </div>
                        <!-- <div class="card-body" style="margin-top: -1.3rem;"> -->
                        <div class="form-group">
                            <label> Tembusan </label>
                            <input name="tembusan" class="form-control" type="text" placeholder="Optional">
                        </div>
                        <input name="pembuat" class="form-control d-none" type="text" value="<?= $nama ?>" placeholder="">

                        <div class="form-group">
                            <label for="lampiran">Lampiran</label>
                            <select name="Lampiran" id="lampiran" class="form-control select2bs4" style="width: 100%;">
                                <option selected disabled>Pilih Lampiran</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="custom">Masukkan Manual</option>
                            </select>
                        </div>

                        <!-- Date -->
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date">
                                <input name="tanggal" type="date" class="form-control " />
                            </div>

                        </div>
                    </div><input name="tgl_buat" type="date" value="<?= $today ?>" class="form-control d-none" />
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="form-group">
                    <textarea name="isi" id="compose-textarea" class="form-control">

                    </textarea>
                </div>
                <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary" formaction="<?= site_url('surat/cetak_surat') ?>">Buat</button>
                    </div>
                    <button type="reset" class="btn btn-default">Cancel</button>
                </div>
                </form>
            </div>
            <!-- /.col -->
        </div>


        <!-- /.row -->