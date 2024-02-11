<?php
$numberOfRows = 15;
$numberOfCells = 5;

$tableHTML = '<table border="1">';

for ($row = 1; $row <= $numberOfRows; $row++) {
    $tableHTML .= '<tr>';
    // Generate cells within the current row
    for ($cell = 1; $cell <= $numberOfCells; $cell++) {
        $tableHTML .= "<td>Row $row, Cell $cell</td>";
    }
    $tableHTML .= '</tr>';
}

$tableHTML .= '</table>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic Table</title>
</head>
<body>
    <?php echo $tableHTML; ?>
</body>
</html>
