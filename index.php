<!DOCTYPE html>
<html lang="ar">
<?php
session_start();
if (empty($_SESSION["usernmae"])) {
    header('Location:login.php');
}
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدير الملفات</title>
</head>

<body>
    <?php require_once "view/header.php"; ?>
    <br>
    <?php require_once "view/filemanagement.php"; ?>
</body>

</html>
