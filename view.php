<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Hexnrik - Logs View</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function copyToClipboard() {
            var dummy = document.createElement('input');
            var text = window.location.href;

            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);

            alert('URL wurde kopiert!');
        }
    </script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/Logo.png" alt="Logo">
            <span>Paste</span>
        </div>
        <div class="buttons">
            <a href="#" onclick="document.querySelector('form').submit();" title="Speichern"><i class="fas fa-save" style="color: #5271FF;"></i></a>
            <a href="#" onclick="copyToClipboard()" title="Kopieren"><i class="fas fa-copy" style="color: #5271FF;"></i></a>
            <a href="index.php" title="Neue Seite"><i class="fas fa-pen" style="color: #5271FF;"></i></a>
        </div>
    </header>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $filename = "logs/$id.txt";

    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $lines = explode("\n", htmlspecialchars($content));
        echo '<pre class="numbered-lines">';
        foreach ($lines as $line) {
            echo '<span>' . $line . '</span>';
        }
        echo '</pre>';
    } else {
        echo "<p>Es wurde keine Datei gefunden.</p>";
    }
} else {
    echo "<p>Du hast vergessen eine ID anzugeben.</p>";
}
?>
</body>
</html>
