<?php require_once 'authenticate.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Devops Control</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">none-ops</a>
        </div>
    </nav>
</header>
<main id="main">
    <div class="container">
        <?php $template = $auth === true ? 'list' : 'otp';

        require_once $template . '.php'; ?>
    </div>
</main>

</body>
</html>
