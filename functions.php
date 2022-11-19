<?php

declare(strict_types=1);

require "data.php";
require "authors.php";



// Get the current date
$currentDate = date("y/m/d");


// Shuffles the author array and prints out the values.
function authorHighlight($name)
{
    shuffle($name);

    foreach ($name as $writer) {
    }


    // Adds breaklines to the output
    echo nl2br("$writer[name]: \r\n known for: $writer[known_for] \r\n age: $writer[age] \r\n author is: ");
    // Instead of printing out 1 or 0, it prints out more readable values
    if ($writer['is_active'] == 1) {
        echo "active";
    } else {
        echo "no longer writing";
    }
}

// Loops through the author array and prints out their image.
function printAuthors($authors)
{
    foreach ($authors as $author) : ?>
        <div class="frame">
            <img src="<?php echo $author; ?>" alt="author">
        </div>
<?php endforeach;
}
?>
