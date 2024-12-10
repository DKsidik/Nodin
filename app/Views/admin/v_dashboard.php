 <!-- Content Wrapper. Contains page content -->

 <section>
     <div class="content-wrapper">
         <div class="content-header">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1 class="m-0">Dashboard / <?= $role ?> </h1>
                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="#">Home</a></li>
                             <li class="breadcrumb-item active">Dashboard</li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>

         <section class="content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box">
                             <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-envelope-open"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Surat Masuk</span>
                                 <span class="badge badge-info float-right" style="width: 20%;"><?= $surat_masuk ?></span>
                                 </span>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-danger elevation-1"><i class="fa-regular fa-envelope"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Surat</span>
                                 <span class="badge badge-info float-right" style="width: 20%;"><?= $jumlah_surat ?></span>
                             </div>
                         </div>
                     </div>

                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-pen-to-square"></i></span>
                             <div class="info-box-content">
                                 <a href="http://localhost/Nodin/public/home/buat" class="info-box-link" style="text-decoration: none; color: inherit;">
                                     <span class="info-box-text">Edit Surat</span>
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-box-archive"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text"></span>

                             </div>

                         </div>
                     </div>
                 </div>


             </div>
             <section class="content" style="width: 125%; padding: 1em">
                 <div class="mt-1 ml-4 col-md-9">

                     <div class="card card-primary card-outline">
                         <div class="card-header">

                             <h3 class="card-title">Surat Masuk</h3>

                             <div class="card-tools">
                                 <div class="input-group input-group-sm">
                                     <input type="text" class="form-control" placeholder="Search Mail">
                                     <div class="input-group-append">
                                         <div class="btn btn-primary">
                                             <i class="fas fa-search"></i>
                                         </div>
                                         <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                             <i class="fas fa-minus"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                             <!-- /.card-tools -->
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body p-0">
                             <div class="mailbox-controls">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-default btn-sm" onclick="reloadPage()">
                                         <i class="fas fa-reply"></i>
                                     </button>
                                 </div>
                                 <button type="button" class="btn btn-default btn-sm">
                                     <i class="fas fa-sync-alt"></i>
                                 </button>
                                 <div class="float-right">
                                     <div class="btn-group">
                                         <button type="button" class="btn btn-default btn-sm">
                                             <i class="fas fa-chevron-left"></i>
                                         </button>
                                         <button type="button" class="btn btn-default btn-sm">
                                             <i class="fas fa-chevron-right"></i>
                                         </button>
                                     </div>
                                 </div>
                             </div>
                             <div class="table-responsive mailbox-messages">
                                 <table class="table table-hover table-striped">
                                     <tbody>
                                         <?php $no = 1 ?>
                                         <?php foreach (array_reverse($surat) as $key) { ?>
                                             <tr>

                                                 <td class=""><?= $no++ ?> </a></td>
                                                 <td class="mailbox-name"><?= $key['pembuat'] ?></a></td>
                                                 <td class="mailbox-subject"><span class="badge badge-primary"><?= $key['status'] ?></span> - <?= $key['hal'] ?>
                                                 </td>
                                                 <td class="mailbox-attachment"></td>
                                                 <td class="mailbox-date">5 mins ago</td>
                                             </tr>
                                         <?php } ?>

                                     </tbody>
                                 </table>
                                 <!-- /.table -->
                             </div>
                             <!-- /.mail-box-messages -->
                         </div>
                         <!-- /.card-body -->
                         <div class="card-footer p-0">
                             <div class="mailbox-controls">
                                 <div class="float-right">

                                     <div class="btn-group">
                                         <button type="button" class="btn btn-default btn-sm">
                                             <i class="fas fa-chevron-left"></i>
                                         </button>
                                         <button type="button" class="btn btn-default btn-sm">
                                             <i class="fas fa-chevron-right"></i>
                                         </button>
                                     </div>
                                     <!-- /.btn-group -->
                                 </div>
                                 <!-- /.float-right -->
                             </div>
                         </div>
                     </div>
                 </div>
             </section>


         </section>