<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = trim($_POST['content']);

    if (empty($content)) {
        echo '<!DOCTYPE html>
        <html lang="de">
        <head>
            <meta charset="UTF-8">
            <title>Fehler</title>
            <link rel="stylesheet" href="css/styles.css">
        </head>
        <body>
            <div class="container">
                <p class="error">Du darfst kein Leeres Dokument erstellen.</p>
            </div>
        </body>
        </html>';
        exit;
    }

    $id = uniqid();
    $dir = "logs";

    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    file_put_contents("$dir/$id.txt", $content);
    $url = "/view.php?id=$id";
    header("Location: $url");
    exit();
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Hexnrik - Logs</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Deine Datei wird gespeichert...</h1>
    </div>
</body>
</html>
