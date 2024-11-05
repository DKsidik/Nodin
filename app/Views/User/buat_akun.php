 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Buat Akun</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Buat Akun</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>
     <section class="content">

         <div class="card">
             <div class="inputan m-4">
                 <?php
                    echo form_open('auth/sv_register');
                    ?>
                 <div><label for="">Username</label></div>
                 <div class="input-group mb-3">
                     <input name="nama_user" class="form-control" placeholder="Username">
                     <div class="input-group-append">
                         <div class="input-group-text">
                             <span class="fas fa-user"></span>
                         </div>
                     </div>
                 </div>
                 <div><label for="">Email</label></div>
                 <div class="input-group mb-3">
                     <input type="email" name="email" class="form-control" placeholder="Email">
                     <div class="input-group-append">
                         <div class="input-group-text">
                             <span class="fas fa-envelope"></span>
                         </div>
                     </div>
                 </div>
                 <div><label for="">No WhatsApp</label></div>
                 <div class="input-group mb-3">
                     <input name="no_hp" class="form-control" placeholder="No.Handphone">
                     <div class="input-group-append">
                         <div class="input-group-text">
                             <span class="fa-solid fa-phone"></span>
                         </div>
                     </div>
                 </div>
                 <div><label for="">Role AKun</label></div>
                 <div class="input-group mb-3">
                     <select class="form-control" name="level" id="level">
                         <option value="">Role Akun</option>
                         <option value="1">Super Admin</option>
                         <option value="2">TU</option>
                         <option value="3">User</option>
                     </select>
                     <div class="input-group-append">
                         <div class="input-group-text">
                             <span class="fa-solid fa-users"></span>
                         </div>
                     </div>
                 </div>
                 <div><label for="">Password</label></div>
                 <div class="input-group mb-3">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                     <div class="input-group-append">
                         <div class="input-group-text">
                             <span class="fas fa-lock"></span>
                         </div>
                     </div>
                 </div>
                 <div><label for="">Konfirmasi Password</label></div>
                 <div class="input-group mb-3">
                     <input type="password" name="repassword" class="form-control" placeholder="Retype password">
                     <div class="input-group-append">
                         <div class="input-group-text">
                             <span class="fa-solid fa-repeat"></span>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-2 d-flex">
                     <div class="mr-2">
                         <button type="submit" class="btn btn-primary btn-block">Buat</button>
                     </div>
                     <div>
                         <button type="cancel" class="btn btn-danger btn-block">Batal</button>
                     </div>
                 </div>
                 <?php
                    echo form_close();
                    ?>
             </div>
         </div>
     </section>

     <!-- Main content -->

     <!-- /.content -->
 </div>