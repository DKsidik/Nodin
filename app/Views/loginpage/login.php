<style>
    body {
        background-image: url('http://localhost/Nodin/public/template/dist/img/photo5.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
        overflow: hidden;
    }

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('http://localhost/Nodin/public/template/dist/img/photo5.jpg');
        background-size: cover;
        background-position: center;
        filter: blur(5px);
        z-index: -1;
    }

    .card {
        border-radius: 5%;
    }
</style>

<body>
    <section style="width: 100vw; height: 100vh;display: flex; justify-content: center; align-items: center;">
        <div class="login-box">
            <div class="login-logo">
                <!-- <a href="../../index2.html"><b>E</b>Office</a> -->
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="login-logo mb-0 mt-4">
                    <img src="http://localhost/Nodin/public/template/dist/img/jkt-selatan.png" alt="Logo Kominfo" style="height: 8rem; margin-bottom:1rem;">
                    <p style="font-size:1.5rem; font-weight:bold">NOTA DINAS</p>
                </div>
                <div class="card-body login-card-body" style="border-radius: 10%;">
                    <p class="login-box-msg">Enter Email and Your Password</p>
                    <?php $errors = session()->getFlashdata('errors'); ?>
                    <?php if (!empty($errors)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif ?>
                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo ' <div class="alert alert-succes" role="alert">';
                        echo   session()->getFlashdata('pesan');
                        echo '</div>';
                    }
                    ?>
                    <?php
                    echo form_open('auth/ceklogin');
                    ?>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa-regular fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <!-- <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div> -->
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <!-- <a href="" class="btn btn-primary btn-block">Sign In</a> -->
                            <button type="submit" class="btn btn-success btn-block">Sign in</button>
                        </div>

                        <!-- /.col -->
                    </div>
                    <?
                    echo form_close();
                    ?>
                    <!-- <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p> -->
                    <!-- <p class="mb-0">
                        <a href="http://localhost/Nodin/public/" class="text-center">Register</a>
                    </p> -->
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </section>
</body>