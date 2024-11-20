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
            /* Mengatur margin body untuk mencetak */
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
        margin-bottom: 1rem;
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
        /* Menghapus padding default dari list */
        margin-left: 10%;
        /* Menghapus margin default dari list */
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
        /* Memastikan ada ruang fleksibel setelah teks sebelum ":" */
        /* Garis putus-putus di antara label dan isinya */
    }

    .format li span {
        font-weight: bold;
        /* Membuat teks label lebih tebal */
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
</style>

<body class="">
    <div class="logo">
        <img src="assets/jakarta2.png" alt="">
    </div>
    <div class="container">
        <div class="judul">
            <h1>SUKU DINAS KOMUNIKASI, INFORMATIKA, DAN STATISTIK <br> KOTA ADMINISTRASI JAKARTA SELATAN
            </h1>
            <h1>NOTA DINAS</h1>
        </div>
        <div class="format" style="margin-bottom:13em;">
            <li>Kepada Yth. : Kepala Suku Dinas Komunikasi, Informatika dan Statistik
                Kota Administrasi Jakarta Selatan

            </li>
            <li>Dari &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</li>
            <li>Sifat &emsp;&emsp;&emsp;&nbsp; :</li>
            <li>Lampiran &emsp;&nbsp;:</li>
            <li>Hal &emsp;&emsp;&emsp;&emsp;:</li>
        </div>

        <div class="">
            <div class="row justify-content-end"> <!-- Kolom rata kanan -->
                <div class="col-4 text-center"> <!-- Kolom untuk tanggal, rata kanan -->
                    <p>Jakarta, xx xxxxxxxxx xxxx</p>
                </div>
            </div>

            <div class="row justify-content-end"> <!-- Kolom rata kanan -->
                <div class="col-4 text-center"> <!-- Kolom untuk alamat, rata kanan -->
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