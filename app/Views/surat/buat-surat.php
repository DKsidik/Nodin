<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<!-- /.col -->
<div class="col-md-9" style="margin-left: 20em; margin-top: 2em">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Compose New Message</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <input class="form-control" placeholder="Kepada:">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Lampiran:">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Sifat:">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Hal:">
            </div>
            <div class="form-group">
                <textarea id="compose-textarea" class="form-control" style="height: 300px">
                    </textarea>
            </div>
            <div class="form-group">
                <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="float-right">
                <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
                <button type="submit" class="btn btn-primary"><i class="far fa-envelop"></i> Send</button>
            </div>
            <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->