<?php $currentPage = !empty($_GET['page']) ? $_GET['page'] : ''; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Mantilla | Portfolio</title>

    <!-- General -->
    <link rel="stylesheet" href="../src/css/index.css">
    <link rel="stylesheet" href="../src/css/animations.css">
    <link rel="stylesheet" href="../src/css/colors.css">
    <link rel="stylesheet" href="../src/css/reusable.css">
    
    <!-- Pages -->
    <link rel="stylesheet" href="../src/pages/about-me/about-me.css">
    <link rel="stylesheet" href="../src/pages/projects/projects.css">
    <link rel="stylesheet" href="../src/pages/contact/contact.css">
    
    <!-- Components -->
    <link rel="stylesheet" href="../src/components/navbar/navbar.css">
</head>
<body>
    <?php include '../src/main.php'; ?>
</body>
</html>
