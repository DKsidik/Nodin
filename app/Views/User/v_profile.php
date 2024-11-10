<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card ml-5 mt-4" style="width:90%">
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <div class="col-5 text-center">
                                            <img src="http://localhost/Nodin/public/template/dist/img/<?=$user['image']?>" alt="user-avatar" class="img-circle img-fluid">
                                        </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label for="inputName">Username</label>
                        <input type="text" id="inputName" class="form-control" placeholder="<?=$user['nama_user']?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">E-Mail</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="<?=$user['email']?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">No.WhatsApp</label>
                        <input type="text" id="inputSubject" class="form-control" placeholder="<?=$user['no_hp']?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Role Akun</label>
                        <input type="text" id="inputSubject" class="form-control" placeholder=" <?php
                                    if ($user['level'] == 1) {
                                        echo 'Super Admin';
                                    } elseif ($user['level'] == 2) {
                                        echo 'Tata Usaha';
                                    } else {
                                        echo 'User'; // Level yang tidak diketahui
                                    }
                                    ?>" disabled>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->