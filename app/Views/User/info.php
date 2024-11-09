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
         <?php
            if (session()->getFlashdata('pesan')) {
                echo ' <div class="alert alert-success" role="alert">';
                echo   session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>

         <!-- Default box -->
         <div class="card card-solid">
             <div class="card-body pb-0">
                 <div class="row">
                     <?php foreach ($user as $key) { ?>
                         <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                             <div class="card bg-light d-flex flex-fill">
                                 <div class="card-header text-muted border-bottom-0">
                                     <?php
                                        if ($key['level'] == 1) {
                                            echo 'Super Admin';
                                        } elseif ($key['level'] == 2) {
                                            echo 'Tata usaha';
                                        } else {
                                            echo 'User'; // Jika ada level yang tidak diketahui
                                        }
                                        ?>
                                 </div>

                                 <div class="card-body pt-0">
                                     <div class="row">
                                         <div class="col-7">
                                             <h2 class="lead"><b><?= $key['nama_user'] ?></b></h2>
                                             <p class="text-muted text-sm"><b>About: </b> </p>
                                             <ul class="ml-4 mb-0 fa-ul text-muted">
                                                 <li class="small"><span class="fa-li"><i class="fa-solid fa-envelope"></i></span> <?= $key['email'] ?></li>
                                                 <li class="small mt-3"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <?= $key['no_hp'] ?></li>
                                             </ul>
                                         </div>
                                         <div class="col-5 text-center">
                                             <img src="http://localhost/Nodin/public/template/dist/img/avatar.png" alt="user-avatar" class="img-circle img-fluid">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card-footer">
                                     <div class="text-right">
                                         <a href="http://localhost/Nodin/public/Home/edit_akun" class="btn btn-sm bg-teal">
                                             <i class=" mr-1 fa-solid fa-user-pen"></i> Edit Profile
                                         </a>
                                         <a href="http://localhost/Nodin/public/Home/v_profile" class="btn btn-sm btn-primary">
                                             <i class="mr-2 fas fa-user"></i> View Profile
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     <?php } ?>
                 </div>
             </div>
             <!-- /.card-body -->
             <div class="card-footer">
                 <nav aria-label="Contacts Page Navigation">
                     <ul class="pagination justify-content-center m-0">
                         <li class="page-item active"><a class="page-link" href="#">1</a></li>
                         <li class="page-item"><a class="page-link" href="#">2</a></li>
                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                         <li class="page-item"><a class="page-link" href="#">4</a></li>
                         <li class="page-item"><a class="page-link" href="#">5</a></li>
                         <li class="page-item"><a class="page-link" href="#">6</a></li>
                         <li class="page-item"><a class="page-link" href="#">7</a></li>
                         <li class="page-item"><a class="page-link" href="#">8</a></li>
                     </ul>
                 </nav>
             </div>
             <!-- /.card-footer -->
         </div>
         <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>