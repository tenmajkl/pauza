<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>No to pauza</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-size: 3rem;
        }
    </style>
</head>
<body>
<?php
// Lets have some spaghetti

require ".." . DIRECTORY_SEPARATOR . "builder.php";

echo build();

?>
</body>
</html>
