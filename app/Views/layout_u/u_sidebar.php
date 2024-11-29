 <style>
     .sidebar {
         display: flex;
         flex-direction: column;
         height: auto;
         /* background-color: rgba(0, 0, 33, 0.3) */
         /* Memenuhi tinggi layar */
     }

     .logout-item {
         margin-top: auto;
         /* Memposisikan logout di bagian bawah */
     }
 </style>l
 <section>

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="http://localhost/Nodin/public/home/home3" class="brand-link">
             <img src="http://localhost/Nodin/public/template/dist/img/jkt-raya.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
             <span class="brand-text font-weight-light">Nota Dinas</span>
         </a>

         <!-- Sidebar -->
         <div class="sidebar">
             <!-- Sidebar user panel (optional) -->
             <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                 <div class="image">
                     <img src="http://localhost/Nodin/public/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                 </div>
                 <div class="info">
                     <a href="#" class="d-block"><?= $nama ?></a>
                 </div>
             </div>

             <!-- SidebarSearch Form -->
             <div class="form-inline">
                 <div class="input-group" data-widget="sidebar-search">
                     <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                     <div class="input-group-append">
                         <button class="btn btn-sidebar">
                             <i class="fas fa-search fa-fw"></i>
                         </button>
                     </div>
                 </div>
             </div>

             <!-- Sidebar Menu -->
             <nav class="mt-2">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                         <a href="http://localhost/Nodin/public/home/home3" class="nav-link">
                             <i class="mr-4 fa-solid fa-house" style="margin-right: 10px;"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="http://localhost/Nodin/public/surat/info_surat" class="nav-link">
                             <i class="mr-4 fa-solid fa-user-tie" style="margin-right: 10px;"></i>
                             <p>Surat</p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="mr-4 fa-solid fa-pen"></i>
                             <p>
                                 Buat Surat
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview" style="margin-left: 0.5rem;">
                             <li class="nav-item">
                                 <a href="http://localhost/Nodin/public/home/buat" class="nav-link">
                                     <i class="mr-3 fa-regular fa-envelope"></i>
                                     <p>Surat Internal</p>
                                 </a>
                             </li>
                         </ul>



                         <ul class="nav nav-treeview" style="margin-left: 0.5rem;">
                             <li class="nav-item">
                                 <a href="http://localhost/Nodin/public/surat/external" class="nav-link">
                                     <i class="mr-3 fa-solid fa-pen-to-square"></i>
                                     <p>Surat External</p>
                                 </a>
                             </li>
                         </ul>



                         <div class="row">

                         </div>
                     <li class="nav-item logout-item">
                         <a href="http://localhost/Nodin/public/auth/logout" class="nav-link">
                             <i class="mr-4 fa-solid fa-right-from-bracket"></i>
                             <p>Logout</p>
                         </a>
                     </li>
             </nav>
             <!-- /.sidebar-menu -->

         </div>
         <!-- /.sidebar -->

 </section>