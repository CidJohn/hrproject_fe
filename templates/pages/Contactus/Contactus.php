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
    $contactForm = __DIR__ . '/Section/ContactForm/ContactForm.php';

    include $navbarPath;
    include $contactForm;
    include $designFramePath;

    ?>

</body>

</html>