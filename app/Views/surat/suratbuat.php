<section>

    <div class="card card-default" style="margin-left:20em; margin-top: 1em; width:70%;">
        <div class="card-header">
            <h3 class="card-title">Buat Surat</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kepada</label>
                        <select class="form-control select2bs4 " style="width: 100%;">
                            <option selected="selected" disabled>--ketik/Pilih--</option>
                            <option>Kepala Suku Dinas Komunikasi, Informatika dan Statistik
                                Kota Administrasi Jakarta Selatan
                            </option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Pembuat Laporan</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                            <option>....</option>
                            <option>....</option>
                            <option>....</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sifat</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected" disabled>--Pilih--</option>
                            <option>Penting</option>
                            <option>....</option>

                        </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="card-body" style="margin-top: -1.3rem;">
                    <div class="form-group">
                        <label> Hal </label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                    <!-- <div class="card-body" style="margin-top: -1.3rem;"> -->
                    <div class="form-group">
                        <label> Tembusan </label>
                        <input class="form-control" type="text" placeholder="Optional">
                    </div>

                    <div class="form-group">
                        <label>Lampiran</label>
                        <select class="form-control select2bs4 " style="width: 100%;">
                        </select>
                    </div>
                    <!-- Date -->
                    <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <div class="form-group" style="margin-left: 1rem; margin-right:2rem; margin-top:-2rem">
            <textarea id="compose-textarea" class="form-control ">

                </textarea>
        </div>
        <div class="card-footer">
            <div class="float-right">
                <button type="button" class="btn btn-default">Draft</button>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
            <button type="reset" class="btn btn-default">Cancel</button>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    </div>
</section>