<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pendaftaran Seminar</h2>
    <form action="proses_daftar.php" method="POST">
            <label>Nama Lengkap</label><br>
            <input type="text" name="nama" required><br>
            <label>Email</label><br>
            <input type="email" name="email" required><br>
            <label>Asal</label><br>
            <input type="text" name="asal" required><br>
        <button type="submit" name="daftar">Daftar Sekarang</button>
    </form>
</body>
</html>