 <!-- Content Wrapper. Contains page content -->

 <section>
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1 class="m-0">Profile </h1>
           </div><!-- /.col -->
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Profile</li>
             </ol>
           </div><!-- /.col -->
         </div><!-- /.row -->
       </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
       <div class="row mt-5">
         <div class="col text-center">
           <div class="border-success">
             <img src="http://localhost/Nodin/public/template/dist/img/user2-160x160.jpg" alt="">
           </div>
         </div>
         <div class="col">
           <div class="row mb-2">
             <div class="col d-flex text-center">
               <label for="" class="mr-3 mt-1">Username</label>
               <input class="form-control" style="width: 70%;" type="text" value="<?= session()->get('nama_user') ?>">
             </div>
           </div>
           <div class="row mb-2">
             <div class="col d-flex text-center">
               <label for="" class="mr-3 mt-1">Email</label>
               <input class="form-control" style="width: 70%;" type="text" value="<?= session()->get('email') ?>">
             </div>
           </div>
           <div class="row mb-2">
             <div class="col d-flex text-center">
               <label for="" class="mr-3 mt-1">No WhatsApp</label>
               <input class="form-control" style="width: 70%;" type="text" value="<?= session()->get('no_hp') ?>">
             </div>
           </div>
           <div class="row mb-2">
             <div class="col d-flex text-center">
               <label for="" class="mr-3 mt-1">Role Akun</label>
               <input class="form-control" style="width: 70%;" type="text"
                 value="<?= (session()->get('level') == 1) ? 'Super Admin' : session()->get('level') ?>">
             </div>
           </div>
         </div>
       </div>

       <!-- /.row -->

     </section>