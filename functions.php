<?php

declare(strict_types=1);

require "arrays.php";
require "variables.php";




$currentDate = date("y/m/d");



function authorHighlight($name)
{
    shuffle($name);

    foreach ($name as $writer) {
    }



    echo "$writer[name]: <br> known for: $writer[known_for] <br> age: $writer[age] <br> author is: ";
    if ($writer['is_active'] == 1) {
        echo "active";
    } else {
        echo "no longer writing";
    }
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
