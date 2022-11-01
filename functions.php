<?php

declare(strict_types=1);
require "arrays.php";
require "variables.php";


/* function sum(int $sum1, int $sum2)
{
    return $sum1 * $sum2;
} */

$currentDate = date("y/m/d");

/* function checkAuthor($name)
{

    echo "<p>";

    if ($name['is_alive'] === true) {
        echo "<p>alive</p>";
    } else {
        echo "<p>dead</p>";
    }
} */

function authorHighlight($name)
{
    shuffle($name);

    foreach ($name as $writer) {
    }

    echo "$writer[name]: <br> known for: $writer[known_for] <br> age: $writer[age]";
}


function printAuthors($authors)
{
    foreach ($authors as $author) : ?>
        <div class="frame">
            <img src="<?php echo $author; ?>" alt="author">
        </div>
<?php endforeach;
}
?>
