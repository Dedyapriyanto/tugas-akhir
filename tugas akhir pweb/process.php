<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["pesan"]);
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Terkirim</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; color: #222; padding: 40px; }
        .result-container {
            background: #fff;
            max-width: 400px;
            margin: 60px auto;
            border-radius: 12px;
            box-shadow: 0 4px 16px #0001;
            padding: 32px 24px;
            text-align: center;
        }
        h2 { color: #00d4ff; margin-bottom: 18px; }
        p { margin: 12px 0; }
        a { display: inline-block; margin-top: 24px; color: #00d4ff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="result-container">
        <h2>Terima kasih, <?= $nama ?>!</h2>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Pesan Anda:</strong><br><?= nl2br($pesan) ?></p>
        <a href="index.php">&larr; Kembali ke Beranda</a>
    </div>
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit;
}
?>