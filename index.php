<?php

declare(strict_types=1);
// Fetch the other php files
require 'authors.php';
require 'functions.php';
require 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts/scripts.js" defer></script>
    <title>Elephant in the room</title>
</head>

<body>
    <header>
        <h1>Fantasy</h1>
        <div class="date-container">
            <button>Show current date</button>
            <div class="date">
                <h2>Current date</h2>
                <p>
                    <?php echo $currentDate; ?>
                </p>
            </div>

        </div>
    </header>

    <h3>Authors</h3>
    <section class="authors-frame">
        <?php
        printAuthors($authors)
        ?>

    </section>
    <h3>Covers</h3>
    <section class="cover-array">
        <!-- Prints out the book covers and links -->
        <?php
        foreach ($books as $book) : ?>
            <div class="cover">
                <a href="<?php echo $book['link'] ?>" target="_blank"><img src="<?php echo $book['cover']; ?>" alt="cover"></a>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="author-highlight">
        <div class="random-author">
            <h3>Author of the day!</h3>
            <p>(Refresh the page for a new author)</p>
            <p>
                <?php
                authorHighlight($randomAuthor);
                ?>
            </p>

        </div>
    </section>

    <div class="quotes">
        <p>Quotes from some of the books</p>
        <!-- Print out the quotes -->
        <?php
        foreach ($quotes as $quote)
            foreach ($quote as $recite) : ?>
            <p>
                <?php echo $recite ?>
            </p>
        <?php endforeach; ?>
    </div>

    <?php
    // If email is seat add it to a variable, otherwise make it an empty string
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = "";
    }

    ?>
    <div class="form-container">
        <h3>Sign up to our newsletter!</h3>
        <p>
            <?php
            // If email has a value print out that the user has "signed up"
            if ($email != "") {
                echo "$email has successfully been signed up";
            }
            ?>
        </p>
        <form action="index.php" method="post">
            <label for="email"> Your email</label>
            <input type="email" name="email" placeholder="name@mail.com">
        </form>

    </div>
</body>

</html>
