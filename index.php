<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Hexnrik - Logs</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
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
            <a href="index.php" onclick="copyToClipboard()" title="Neue Seite"><i class="fas fa-pen" style="color: #5271FF;"></i></a>
        </div>
    </header>
    <h1>Text speichern und teilen</h1>
    <form action="save.php" method="post">
        <textarea name="content" rows="10" cols="50" placeholder="Geben Sie Ihren Text hier ein..."></textarea><br>
        <input type="submit" value="Speichern">
    </form>
</body>
</html>
