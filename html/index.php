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
    $style = <<<EOD
    <style>
        .variable{
            position: relative;
            bottom:5px;
            background:#22ccf7;
            padding:5px;
            margin:10px;
            width: fit-content;
            border-radius:5px;
            font-size: 30px;
            color:black;
        }
        .functionName{
            font-size: 30px;
            
        }
        .brackets{
            position: relative;
            bottom:-4px;
            font-size: 50px;
            color:#d60000;
        }
    </style>
    EOD;
    $intro = "isset — Determine if a variable is declared and is different than null";
    $function = "<span class=\"functionName\">isset</span>";
    $variable = "<span class=\"variable\">\$amISet</span>";
    $brackets = "<span class=\"brackets\">({$variable});</span>";
    $outro = "This will return true if \$amISet has been declared earlier in your code. If not it will return false.";

    $combine = $intro . "<br><br>" . $style . $function . $brackets . "<br><br>" . $outro;

    $backdrop = new backdrop();
    echo $backdrop->makeBackdrop(
        $backdrop->windowGen($combine)
    );

    ?>

</body>

</html>