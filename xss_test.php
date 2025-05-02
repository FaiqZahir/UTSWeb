<!DOCTYPE html>
<html>
<head>
    <title>Form XSS</title>
</head>
<body>
    <h2>Formulir XSS</h2>
    <form method="GET">
        Masukkan nama Anda: <input name="nama" type="text">
        <button type="submit">Kirim</button>
    </form>
    <hr>
    <div>Halo, <?php echo $_GET['nama']; ?></div>
</body>
</html>
