<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
* {
    box-sizing: border-box;
    padding: 0px;
    margin: 0px;
}
</style>

<body>
    <?php include_once('uiElements/background.php'); ?>

    <?php
    $backdrop = new backdrop();
    echo $backdrop->makeBackdrop();
    ?>
</body>

</html>