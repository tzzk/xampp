<?php

echo "Index Page";

?>
<?php
echo "Before HTML";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>First Php Page</title>
    </head>
    <body>
        <div>
            <h2>Hello . This is PhP lesson</h2>
            <h3><?php echo "To display php output" ."in index page"; ?></h3>
            <?php echo "<h1>html tag in php script</h1>";?>
            <?php print( "<ul>
                        <li>Book</li>
                        <li>Water</li>
                        <li>Heat</li>
                        </ul>"); ?>
        </div>

    </body>
    
</html>
<?php
    echo "after HTML";
?>