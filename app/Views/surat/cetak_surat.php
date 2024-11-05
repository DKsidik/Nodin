<script>
    function showPreview() {
        // Memeriksa apakah form sudah diisi
        var form = document.querySelector('form');
        if (form.checkValidity()) {
            // Menjalankan form submit
            form.submit();
            return false; // Menghentikan pengiriman default agar kita bisa menangani response
        } else {
            // Jika form tidak valid, beri tahu pengguna
            alert('Silakan lengkapi semua field yang diperlukan.');
            return false;
        }
    }
</script>


<?php
// Sertakan file koneksi database
// include 'db_connection.php';

// Cek jika form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $kepada = $_POST['kepada'];
    $pembuat = $_POST['pembuat_laporan'];
    $sifat = $_POST['sifat'];
    $hal = $_POST['hal'];
    $tembusan = $_POST['tembusan'];
    $lampiran = $_POST['lampiran'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];

    // Siapkan dan bind
    $stmt = $conn->prepare("INSERT INTO surat (kepada, pembuat_laporan, sifat, hal, tembusan, lampiran, tanggal, isi) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $kepada, $pembuat, $sifat, $hal, $tembusan, $lampiran, $tanggal, $isi);

    // Eksekusi dan periksa
    if ($stmt->execute()) {
        // Ambil id surat terakhir
        $last_id = $conn->insert_id;

        // Ambil data surat
        $result = $conn->query("SELECT * FROM surat WHERE id = $last_id");
        $surat = $result->fetch_assoc();

        // Tampilkan preview surat
        echo "<h1>Preview Surat</h1>";
        echo "<div id='suratPreview'>";
        echo "<p>Kepada: " . $surat['kepada'] . "</p>";
        echo "<p>Pembuat Laporan: " . $surat['pembuat'] . "</p>";
        echo "<p>Sifat: " . $surat['sifat'] . "</p>";
        echo "<p>Hal: " . $surat['hal'] . "</p>";
        echo "<p>Tembusan: " . $surat['tembusan'] . "</p>";
        echo "<p>Lampiran: " . $surat['lampiran'] . "</p>";
        echo "<p>Tanggal: " . $surat['tanggal'] . "</p>";
        echo "<p>Isi: " . nl2br($surat['isi']) . "</p>";
        echo "</div>";

        // Tombol print
        echo "<button onclick='printDiv()' class='btn btn-secondary'>Print</button>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}

?>


<script>
    function printDiv() {
        var printContents = document.getElementById('suratPreview').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>