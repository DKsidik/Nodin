 <!-- Content Wrapper. Contains page content -->

 <section>
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1 class="m-0">Dashboard / <?= $role ?> </h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="#">Home</a></li>
                             <li class="breadcrumb-item active">Dashboard</li>
                         </ol>
                     </div><!-- /.col -->
                 </div><!-- /.row -->
             </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <section class="content">
             <div class="container-fluid">
                 <!-- Info boxes -->
                 <div class="row">
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box">
                             <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-envelope-open"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Surat Masuk</span>
                                 <span class="info-box-number">700</span>
                                 <!-- <span class="info-box-number">
                                     10
                                     <small>%</small> -->
                                 </span>
                             </div>
                             <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                     </div>
                     <!-- /.col -->
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-danger elevation-1"><i class="fa-regular fa-envelope"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Surat</span>
                                 <span class="badge badge-info float-right" style="width: 20%;"><?= $jumlah_surat ?></span>
                                 <!-- <span class="info-box-number">41,410</span> -->
                             </div>
                             <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                     </div>
                     <!-- /.col -->

                     <!-- fix for small devices only -->
                     <!-- Buat Surat Box with link -->
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-pen-to-square"></i></span>
                             <div class="info-box-content">
                                 <a href="http://localhost/Nodin/public/home/buat" class="info-box-link" style="text-decoration: none; color: inherit;">
                                     <span class="info-box-text">Edit Surat</span>
                                 </a>
                                 <!-- <span class="info-box-number">760</span> -->
                             </div>
                             <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                     </div>
                     <!-- /.col -->
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-box-archive"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Arsip Surat</span>
                                 <!-- <span class="info-box-number">2,000</span> -->
                             </div>
                             <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                     </div>
                     <!-- /.col -->
                 </div>
                 <!-- /.row -->
                 <div class="card bg-gradient-succes">
                     <div class="card-header border-0">

                         <h3 class="card-title">
                             <i class="mr-2 far fa-calendar-alt"></i>
                             Calendar
                         </h3>
                         <!-- tools card -->
                         <div class="card-tools">
                             <!-- button with a dropdown -->
                             <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                     <i class="fas fa-bars"></i>
                                 </button>
                                 <div class="dropdown-menu" role="menu">
                                     <a href="#" class="dropdown-item">Add new event</a>
                                     <a href="#" class="dropdown-item">Clear events</a>
                                     <div class="dropdown-divider"></div>
                                     <a href="#" class="dropdown-item">View calendar</a>
                                 </div>
                             </div>
                             <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                 <i class="fas fa-minus"></i>
                             </button>
                             <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div>
                         <!-- /. tools -->
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body pt-0">
                         <!--The calendar -->
                         <div id="calendar"></div>
                     </div>
                     <!-- /.card-body -->
                 </div>
             </div>


         </section>