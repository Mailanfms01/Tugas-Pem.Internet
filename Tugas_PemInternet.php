<?php
?><html>
<head><title>Pengolahan Nama Data</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="Input">
MASUKAN NAMA ANDA <input type="text" name="nama">
<input type="submit" name="Input" value="Proses">
</br>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "SELAMAT DATANG, $nama";
}
?>