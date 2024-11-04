<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Wasiat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body{
        align-items: center;
        justify-content: center;
    }
    .container{}
    .judul{
        text-align: center;
        width: 100%;
    }
    .logo{
        margin-top: 6rem;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    .logo img{
        width: 13%;
        margin-bottom: 1rem;
    }
    .judul h1{
        margin: 0;
        font-size: 17px;
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
    }
    .format {
        list-style-type: none;
        padding: 0;
        margin-left: 10%;
        font-family: Arial, sans-serif;
    }
    .format li {
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
    }
    .format li span {
        font-weight: bold;
    }
    .tanggal, .alamat, .Nip, .lampiran, .kepala, .nuring {
        text-align: right;
        font-family: Arial, sans-serif;
        margin-right: 20px;
        line-height: 1.5;
    }
    .lampiran p, .kepala p, .nuring p {
        margin: 0;
    }
</style>
<body>
    <div class="logo">
        <img src="public/template/dist/img/jakarta_hitam.png" alt="">
    </div>
    <div class="container">
        <div class="judul">
            <h1>SUKU DINAS KOMUNIKASI, INFORMATIKA, DAN STATISTIK <br> KOTA ADMINISTRASI JAKARTA SELATAN</h1>
            <h1>NOTA DINAS</h1>
        </div>

        <div class="format" style="margin-bottom:13em;">
            <li>Kepada Yth.</li>
            <li>Dari &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</li>
            <li>Nomor &emsp;&emsp;&nbsp;&nbsp;:</li>
            <li>Sifat &emsp;&emsp;&emsp;&nbsp; :</li>
            <li>Lampiran &emsp;&nbsp;:</li>
            <li>Hal &emsp;&emsp;&emsp;&emsp;:</li>
        </div>

        <?php
            $tanggal = date('j F Y');  // Mendapatkan tanggal saat ini
            $tahun = date('Y');        // Mendapatkan tahun saat ini
        ?>
        
        <div class="">
            <div class="row justify-content-end">
                <div class="col-4 text-center">
                    <p>Jakarta, <?php echo $tanggal; ?></p>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4 text-center">
                    <p>
                        Pelaksana Seksi xxxxxxxxxx<br>
                        Suku Dinas Komunikasi, Informatika dan Statistik<br>
                        Kota Administrasi Jakarta Selatan
                    </p>
                </div>
            </div>
            <div class="row justify-content-end" style="height:5rem;"></div>
            <div class="row justify-content-end">
                <div class="Nip col-4 text-center">
                    <p>Ahmad Zaini <br>
                    NIP xxxxxxxxxxxxxxxx</p>
                </div>
            </div>
        </div>

        <div class="tembusan">
            <p>Tembusan:</p>
        </div>
        
        <div class="lampiran">
            <p>Lampiran : Nota Dinas Plt. Kepala Suku Dinas<br>
                Komunikasi, Informatika dan Statistik<br>
                Kota Administrasi Jakarta Selatan<br>
                Nomor    : <br>
                Tanggal  : <?php echo $tahun; ?>
            </p>
        </div>
        
        <div class="kepala">
            <p>Plt. Kepala Suku Dinas<br>
                Komunikasi, Informatika dan Statistik<br>
                Kota Administrasi Jakarta Selatan
            </p>
        </div>
        
        <div class="nuring">
            <p>Nuruning Septarida<br>
                NIP 197309081993022001<br>
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
