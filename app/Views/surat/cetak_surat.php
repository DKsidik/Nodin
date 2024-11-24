<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen_<?= $surat['hal'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    @media print {
        @page {
            margin-top: 1.2cm;
            margin-bottom: 1.2cm;
            margin-left: 1.94cm;
            margin-right: 1cm;
        }

        body {
            margin: 0;
        }
    }

    body {
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-family: Arial, sans-serif;
        background-color: aqua;
        padding: 0%;
    }

    .container {
        width: 100%;
        padding: 5;
        background-color: aliceblue;
    }

    .judul {
        text-align: center;
        width: 100%;
    }

    .logo {
        margin-top: 6rem;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .logo img {
        width: 13%;
        margin-bottom: 1rem;
    }

    .judul h1 {
        margin: 0;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
    }

    .format {
        list-style-type: none;
        padding: 0;
        font-size: 12px;
    }

    .format li {
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
    }

    .format li span {
        font-weight: bold;
    }

    .tanggal,
    .alamat,
    .Nip,
    .lampiran,
    .kepala,
    .nuring {
        background-color: aqua;
        text-align: right;
        margin-right: 20px;
        line-height: 1.5;
        font-size: 12px;
    }

    .lampiran p,
    .kepala p,
    .nuring p {
        margin: 20px 0;
    }

    .waktu {
        justify-content: end;
        justify-items: end;
    }
</style>


<body class="">
    <div class="logo">
        <img src="http://localhost/Nodin/public/template/dist/img/jakarta_hitam.png" alt="">
    </div>
    <div class="container">
        <div class="judul">
            <h1>SUKU DINAS KOMUNIKASI, INFORMATIKA, DAN STATISTIK <br> KOTA ADMINISTRASI JAKARTA SELATAN
            </h1>
            <h1>NOTA DINAS</h1>
        </div>
        <div class="format" style="margin-bottom:13em;">
            <li>Kepada Yth&emsp;: <?= $surat['kepada'] ?></li>
            <li>Dari &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $surat['pembuat'] ?></li>
            <li>Nomor &emsp;&emsp;&nbsp;&nbsp;&nbsp;:</li>
            <li>Sifat &emsp;&emsp;&emsp;&nbsp;&nbsp; : <?= $surat['sifat'] ?></li>
            <li>Lampiran &emsp;&nbsp;&nbsp;:</li>
            <li>Hal &emsp;&emsp;&emsp;&emsp;&nbsp;: <?= $surat['hal'] ?></li>
        </div>

        <div class="">
            <div class="row justify-content-end">
                <div class="col-4 text-center">
                    <p> Jakarta, <?= $surat['tanggal'] ?></p>
                </div>
            </div>

            <div class="bg-success row justify-content-end"> <!-- Kolom rata kanan -->
                <div class="col-6 text-center"> <!-- Kolom untuk alamat, rata kanan -->
                    <p>
                        Pelaksana Seksi xxxxxxxxxx<br>
                        Suku Dinas Komunikasi, Informatika dan Statistik<br>
                        Kota Administrasi Jakarta Selatan
                    </p>
                </div>
            </div>
            <div class="row justify-content-end" style="height:5rem;">

            </div>
            <div class="row justify-content-end">
                <div class="Nip col-4 text-center">
                    <p>Ahmad Zaini <br>
                        NIP xxxxxxxxxxxxxxxx</p>
                </div>
            </div>
        </div>



        <div class="tembusan">
            <p>Tembusan: <?= $surat['tembusan'] ?></p>
        </div>
        <div class="lampiran">
            <p> Lampiran : Nota Dinas Plt. Kepala Suku Dinas<br>
                Komunikasi, Informatika dan Statistik<br>
                Kota Administrasi Jakarta Selatan<br>
                Nomor : <br>
                Tanggal : 2024</p>
        </div>
        <div class="kepala">
            <p> Plt. Kepala Suku Dinas<br>
                Komunikasi, Informatika dan Statistik <br>
                Kota Administrasi Jakarta Selatan <br>
            </p>
        </div>
        <div class="nuring">
            <p>Nuruning Septarida <br>
                NIP 197309081993022001 <br>
            </p>
        </div>
    </div>
</body>


</html>


<script>
    window.addEventListener(window.print());
</script>