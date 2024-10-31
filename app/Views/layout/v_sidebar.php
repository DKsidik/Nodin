 <style>
     .sidebar {
         display: flex;
         flex-direction: column;
         height: 100vh;
         /* background-color: blue; */
         /* Memenuhi tinggi layar */
     }

     .logout-item {
         margin-top: 0;
         /* Memposisikan logout di bagian bawah */
     }
 </style>l
 <section>

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="http://localhost/Nodin/public/home" class="brand-link">
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
                         <a href="http://localhost/Nodin/public/home" class="nav-link">
                             <i class="fa-solid fa-house" style="margin-right: 10px;"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>


                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-circle"></i>
                             <p>
                                 Surat
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="http://localhost/Nodin/public/home/buat" class="nav-link">
                                     <i class="fa-solid fa-pen-to-square" style=" margin-right: 1rem; "></i>
                                     <p>Buat Surat</p>
                                 </a>
                             </li>
                         </ul>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="http://localhost/Nodin/public/home/buat" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Buat Surat</p>
                                 </a>
                             </li>
                         </ul>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="http://localhost/Nodin/public/home/buat" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Buat Surat</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item logout-item">
                         <a href="http://localhost/Nodin/public/auth/logout" class="nav-link">
                             <i class="mr-3 fa-solid fa-right-from-bracket"></i>
                             <p>Logout</p>
                         </a>
                     </li>
             </nav>
             <!-- /.sidebar-menu -->

         </div>
         <!-- /.sidebar -->

 </section>