<?php
require_once 'addNameProc.php';
session_start();
$addName = new AddNamesProc();

$output = isset($_SESSION['namesList']) ? implode("\n", $_SESSION['namesList']) : "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $output = $addName->addClearNames();
    $_SESSION['namesList'] = explode("\n", $output);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Names</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .text-area {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Add Names</h2>
                <form method="post" class="mb-3">
                    <button type="submit" name="addName" class="btn btn-primary">Add Name</button>
                    <button type="submit" name="clearNames" class="btn btn-primary">Clear Names</button>
                    <div class="form-group">
                        <input type="text" name="nameInput" placeholder="Enter First and Last Name" class="form-control">
                    </div>

                </form>

                <h3>List of Names</h3>
                <textarea rows="10" class="form-control text-area" id="namelist" name="namelist" readonly><?php echo htmlspecialchars($output ?? ''); ?></textarea>
            </div>
        </div>
    </div>

</body>
</html>
