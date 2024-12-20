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

        }

        body {
            margin: 0;

        }
    }

    body {
        align-items: center;
        justify-content: center;
        font-size: 14px;
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

        height: 225px;
    }

    .container {
        background-color: aqua;
        width: 100%;
        height: 1500vh;

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
        margin-right: 0;
        /* Memberi jarak dari tepi kanan */
        line-height: 1.5;

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

    .tembusan p {
        margin-bottom: 15px;
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
            <li>Nomor &emsp;&emsp;&nbsp;&nbsp;&nbsp;: <?= $surat['no_surat'] ?></li>
            <li>Sifat &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: <?= $surat['sifat'] ?></li>
            <li>Lampiran &emsp;&nbsp;&nbsp;: <?= $surat['lampiran'] ?></li>
            <li>Hal &emsp;&emsp;&emsp;&emsp;&nbsp;: <?= $surat['hal'] ?></li>
            <div class="isi">
                <p class="mt-4" style="text-align: justify;">&emsp;<?= $surat['isi'] ?>
            </div>
        </div>


        <div class="">
            <div class="row justify-content-end" style="margin-top: -50px">
                <div class="col-4 text-center" style="margin-right: 5px; width: 200px;">
                    <p>Jakarta, <?= $surat['tanggal'] ?></p>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-10 text-center" style="margin-right: -120px;">
                    <p>
                        Plt. Kepala Suku Dinas<br>
                        Komunikasi, Informatika dan Statistik<br>
                        Kota Administrasi Jakarta Selatan<br>

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


        <div>
            <div class="tembusan">
                <p>1. Tembusan: <?= $surat['tembusan'] ?></p>
            </div>
            <!-- Pemisah Halaman -->
            <div style="page-break-after: always;"></div>
            <!-- Halaman Kedua -->
            <div class="row" style="margin-right:-100px; display: flex; justify-content: space-between; align-items: flex-start; height: 100%; position: relative;">
                <div class="" style="width: 48%; margin-top: 1rem;">
                    <div class="col" style="text-align:right;">
                        <p>Lampiran :</p>
                    </div>
                </div>
                <div class="col" style="margin-top: 1rem;">
                    Nota Dinas Plt. Kepala Suku Dinas<br>
                    Komunikasi, Informatika dan Statistik<br>
                    Kota Administrasi Jakarta Selatan<br>
                    Nomor : <br>
                    Tanggal : 2024
                </div>
                <div style="height: 800px;">

                </div>
                <div class="col" style="width: 48%; text-align: right; position: absolute; bottom: 0; right: 0;">
                    <p>Plt. Kepala Suku Dinas<br>
                        Komunikasi, Informatika dan Statistik<br>
                        Kota Administrasi Jakarta Selatan</p>
                    <p>Nuruning Septarida<br>NIP 197309081993022001</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



<script>
    window.addEventListener(window.print());
</script>