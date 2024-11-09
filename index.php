<!DOCTYPE html>
<html lang="en">

<?php
    if (!isset($_SESSION)){
        session_start();
    }

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }else {
        $page = "home";
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="javascript/matter.js"></script>
    <title>Nataro Ajaouin</title>
</head>

<body>
    
<header>
    <?php include("includes/navbar.inc.php") ?>
</header>

<section class="main-content">
    <div class="background">
        <?php include("includes/$page.inc.php") ?>
    </div>
</section>

</body>

</html>