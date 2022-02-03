<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #343a40;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="alert alert-primary">Header layout</header>
    <div class="container-fluid">
        
    <mky:if cond="$name == 'other'">
        <div class="alert alert-warning">Other Page <?= $name ?></div>
        <?php else: ?>
        <div class="alert alert-warning">Page <?= $name ?></div>
    </mky:if>

    </div>
    <footer class="alert alert-primary mt-auto">Footer layout</footer>
</body>
</html>