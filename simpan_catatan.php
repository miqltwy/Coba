<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $catatan = $_POST["catatan"];
    
    // Simpan catatan ke database atau file
    // Contoh: menyimpan ke file
    $file = 'catatan.txt';
    file_put_contents($file, $catatan);
    
    echo "Catatan berhasil disimpan.";
}
?>