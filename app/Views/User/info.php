<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Informasi User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Informasi User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Flash message -->
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    <?php foreach (array_reverse($user) as $key) : ?>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-header text-muted border-bottom-0">
                                    <?php
                                    if ($key['level'] == 1) {
                                        echo 'Super Admin';
                                    } elseif ($key['level'] == 2) {
                                        echo 'Tata Usaha';
                                    } else {
                                        echo 'User'; // Level yang tidak diketahui
                                    }
                                    ?>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b><?= $key['nama_user']; ?></b></h2>
                                            <p class="text-muted text-sm"><b>About: </b> </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small">
                                                    <span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                                                    <?= $key['email']; ?>
                                                </li>
                                                <li class="small mt-3">
                                                    <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                    <?= $key['no_hp']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="http://localhost/Nodin/public/template/dist/img/<?= $key['image'] ?>" alt="user-avatar" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="http://localhost/Nodin/public/Home/edit_akun/<?= $key['id_user'] ?>" class="btn btn-sm bg-teal">
                                            <i class="mr-1 fa-solid fa-user-pen"></i> Edit Profile
                                        </a>
                                        <a href="http://localhost/Nodin/public/Home/v_profile/<?= $key['id_user'] ?>" class="btn btn-sm btn-primary">
                                            <i class="mr-2 fas fa-user"></i> View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /.card-body -->

            <!-- Pagination -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        <?php for ($i = 1; $i <= 8; $i++) : ?>
                            <li class="page-item <?= $i === 1 ? 'active' : ''; ?>">
                                <a class="page-link" href="#"><?= $i; ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->