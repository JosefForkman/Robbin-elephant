<?php

declare(strict_types=1);
require 'variables.php';
require 'functions.php';
require 'arrays.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Elephant in the room</title>
</head>

<body>
    <header>
        <h1>Fantasy</h1>
        <div class="date">
            <h2>Current date</h2>
            <p>
                <?php echo $currentDate; ?>
            </p>
        </div>

    </header>

    <section class="authors-frame">

        <?php
        foreach ($authors as $author) : ?>
            <div class="frame">
                <img src="<?php echo $author ?>" alt="author">
            </div>
        <?php endforeach; ?>

    </section>
    <section class="cover-array"></section>
</body>

</html>
