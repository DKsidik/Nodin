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
            margin: 0;
            /* Menghilangkan margin default */
        }

        body {
            margin: 0;

        }
    }

    body {
        align-items: center;
        justify-content: center;
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
        margin-bottom: 2rem;
    }

    .judul h1 {
        margin: 0;
        font-size: 17px;
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
    }

    .format {
        list-style-type: none;
        /* Menghapus bullet point dari li */
        padding: 0;

        font-family: Arial, sans-serif;
    }


    .format li {
        margin-bottom: 10px;
        /* Memberikan jarak antar item */
        display: flex;
        /* Membuat item flexbox */
        justify-content: space-between;
        /* Membuat spasi antara label dan isinya */
    }

    .format li::after {
        content: " ";
        /* Memberikan ruang untuk konten setelah label */
        flex-grow: 1;
    }

    .format li span {
        font-weight: bold;
        /* Membuat teks label lebih tebal */
    }

    .isi {

        height: 250px;
    }

    .container {
        background-color: aqua;
        width: 100%;
    }

    .tanggal {
        text-align: right;
        /* Meratakan teks ke kanan */
        font-family: Arial, sans-serif;
        /* Opsional: menentukan font */
        margin-right: 15px;
        /* Opsional: memberi sedikit jarak dari tepi kanan */
    }

    .alamat {
        text-align: right;
        /* Meratakan teks ke kanan */
        font-family: Arial, sans-serif;
        /* Opsional: menentukan jenis font */
        margin-right: 20px;
        /* Opsional: memberi jarak dari tepi kanan */
        line-height: 1.5;
        /* Opsional: memberi spasi antar baris */
    }

    .Nip {
        text-align: right;
        /* Meratakan teks ke kanan */
        font-family: Arial, sans-serif;
        /* Opsional: menentukan jenis font */
        margin-right: 20px;
        /* Opsional: memberi jarak dari tepi kanan */
    }

    .lampiran {
        text-align: right;
        /* Meratakan teks ke kanan */
        font-family: Arial, sans-serif;
        /* Menentukan jenis font */
        margin-right: 20px;
        /* Memberi jarak dari tepi kanan */
        line-height: 1.5;
        /* Meningkatkan spasi antar baris untuk keterbacaan */
    }

    .lampiran p {
        margin: 0;
        /* Menghapus margin default pada paragraf */
    }

    .kepala {
        text-align: right;
        /* Meratakan teks ke kanan */
        font-family: Arial, sans-serif;
        /* Menentukan jenis font */
        margin-right: 20px;
        /* Memberi jarak dari tepi kanan */
        line-height: 1.5;
        /* Meningkatkan spasi antar baris untuk keterbacaan */
    }

    .kepala p {
        margin: 30px 0;
        /* Memberi jarak 20px di atas dan bawah paragraf */
    }

    .nuring {
        text-align: right;
        /* Meratakan teks ke kanan */
        font-family: Arial, sans-serif;
        /* Menentukan jenis font */
        margin-right: 20px;
        /* Memberi jarak dari tepi kanan */
        line-height: 1.5;
        /* Meningkatkan spasi antar baris untuk keterbacaan */
    }

    .nuring p {
        margin: 20px 0;
        /* Memberi jarak 20px di atas dan bawah paragraf */
    }

    .waktu {
        justify-content: end;
        justify-items: end;
    }

    .isi {
        margin-top: -25px;
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
            <h5>NOTA DINAS</h5>
        </div>
        <div class="format">
            <li>Kepada Yth &emsp;: <?= $surat['kepada'] ?></li>
            <li>Dari &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $surat['pengaju'] ?></li>
            <li>Sifat &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: <?= $surat['sifat'] ?></li>
            <li>Lampiran &emsp;&nbsp;&nbsp;: <?= $surat['lampiran'] ?></li>
            <li>Hal &emsp;&emsp;&emsp;&emsp;&nbsp;: <?= $surat['hal'] ?></li>
            <div class="isi">
                <p class="" style="text-align: justify;">&emsp;<?= $surat['isi'] ?>
            </div>
        </div>


        <div class="">
            <div class="row justify-content-end">
                <div class="col-4 text-center" style="margin-right: 5px; width: 200px;">
                    <p>Jakarta, <?= $surat['tanggal'] ?></p>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-10 text-center" style="margin-right: -120px;">
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
                <div class="Nip col-8 text-center" style="margin-right: -70px;">
                    <p>Nama <br>
                        NIP xxxxxxxxxxxxxxxx</p>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
<script>
    window.addEventListener(window.print());
</script>