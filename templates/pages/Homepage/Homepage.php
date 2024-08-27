<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hr</title>

</head>

<body>

    <?php
    $designFramePath = __DIR__ . '/../../partials/designFrame.php';
    $navbarPath = __DIR__ . '/../Navbar/Navbar.php';
    $herobannerPath = __DIR__ . '/Section/Herobanner/Herobanner.php';
    include $navbarPath;
    include $herobannerPath;
    include $designFramePath;
    ?>

</body>

</html>