<style>
    .pesan {
   opacity: 0;
   transition: opacity 0.5s ease; /* Atur transisi untuk efek fade */
}

.pesan.show {
   opacity: 1; /* Munculkan pesan saat class "show" ditambahkan */
}

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex">
                    <div class="text-center rounded">
                        <a class="text-center" href="http://localhost/Nodin/public/Home/infouser">
                            <i style="width: 5rem; color:black;" class="text-center fa-solid fa-reply fa-2x"></i>
                        </a>
                    </div>
                    <div>
                        <h1 class="ml-3">Edit User</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        
        
        <!-- Default box -->
        <div class="card ml-4 mt-4" style="width:95%">
            <div class="pesan" id="pesan">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- <div class="alert alert-success" role="alert">
                berhasil ubah
            </div> -->
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                <div class="col-5 text-center">
                                            <img src="http://localhost/Nodin/public/template/dist/img/<?=$user['image']?>" alt="user-avatar" class="img-circle img-fluid">
                                        </div>
                </div>
                <div class="col-7">
                <?php
                    echo form_open('auth/edit_akun/' . $user['id_user']);
                    ?>
                    <div class="form-group">
                        <label for="inputName">Username</label>
                        <input type="text" name="user_name" value="<?=$user['nama_user']?>" id="inputName" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">E-Mail</label>
                        <input type="email" name="email" value="<?=$user['email']?>" id="inputEmail" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">No.WhatsApp</label>
                        <input type="number" name="no_hp" value="<?=$user['no_hp']?>" id="inputSubject" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Role Akun</label>
                        <select class="form-control" name="level" id="level">
                        <option value="">Role Akun</option>
                            <option value="1" <?= $user['level'] == 1 ? 'selected' : ''; ?>>Super Admin</option>
                            <option value="2" <?= $user['level'] == 2 ? 'selected' : ''; ?>>TU</option>
                            <option value="3" <?= $user['level'] == 3 ? 'selected' : ''; ?>>User</option>
                     </select>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="form-group mr-2">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                        <div class="form-group">
                            <button type="cancel" class="btn btn-danger btn  ">Batal</button>
                        </div>
                    </div>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const alertBox = document.querySelector(".pesan"); // Select the .alert div directly
  if (alertBox) {
    // Show the alert with a smooth effect
    setTimeout(() => {
      alertBox.classList.add("show");
    }, 100); // Small delay to ensure DOM is ready

    // Set timeout for 5 seconds, then fade out smoothly
    setTimeout(() => {
      alertBox.classList.remove("show");
    }, 5000);
  }
});
</script>