<?php
$mainListItems = 4;
$subListItems = 5;

$nestedListHTML = '<ul>';

for ($i = 1; $i <= $mainListItems; $i++) {
    $nestedListHTML .= "<li>$i<ul>";

    for ($j = 1; $j <= $subListItems; $j++) {
        $nestedListHTML .= "<li>$j</li>";
    }

    $nestedListHTML .= '</ul></li>';
}

$nestedListHTML .= '</ul>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nested List</title>
</head>
<body>
    <?php echo $nestedListHTML;?>
</body>
</html>
