<?php
// If running from PHP dev server, serve static files directly
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $fullPath = __DIR__ . $path;
    if (is_file($fullPath)) {
        return false;
    }
}

// Load bootstrap
require_once __DIR__ . '/../app/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>VanillaX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- External CSS -->
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <?php require $header; ?>

    <main class="main-container">
        <?php require $view; ?>
    </main>

    <?php require $footer; ?>

    <!-- External JS -->
    <script src="/js/layout.js"></script>
</body>

</html>