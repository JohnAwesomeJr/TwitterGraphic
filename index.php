<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/agate.min.css">

</head>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>
<style>
* {
    box-sizing: border-box;
    padding: 0px;
    margin: 0px;
}

.hljs {
    border-radius: 10px;
    font-size: 20px;
}
</style>
</style>

<body>
    <?php include_once('uiElements/background.php'); ?>
    <?php include_once('uiElements/varType.php'); ?>
    <?php include_once('uiElements/functionMaker.php'); ?>
    <?php include_once('uiElements/listOfDatatypes.php'); ?>




    <?php
    $function = new functionMaker();
    $varType = new varType();
    $backdrop = new backdrop();
    $dataTypesBox = new listOfDatatypes();


    $typeString1 = $varType->typeString('$String', 1);
    $typeInteger1 = $varType->typeInteger('$FirstInteger', 1);
    $typeInteger2 = $varType->typeInteger('$SecondInteger', 1);







    $functionName = "substr";
    $variableArray = [$typeString1, $typeInteger1, $typeInteger2];
    $completeFunction = $function->makeFunction($functionName, $variableArray);

    $explanation = "<h1>{$functionName}</h1><br><br>substr — Return part of a string.<br><br>";
    $useCase = <<<EOD
    <br>
    {$varType->typeInteger('$FirstInteger', 0)} Is the starting position of the selection. {$varType->typeInteger('$SecondInteger', 0)} is the number of characters that you want to select. if {$varType->typeInteger('$SecondInteger', 0)} is not given it will select everything after {$varType->typeInteger('$FirstInteger', 0)}
    
    
    <br>
    If {$varType->typeInteger('$FirstInteger', 0)} is a negative number than the selection will be reversed. It will start at the end of the string.
    eg:<br><br>
    <pre><code class="language-php">
    \$rest = substr("abcdef", -1);    // returns "f"
    \$rest = substr("abcdef", -2);    // returns "ef"
    \$rest = substr("abcdef", -3, 1); // returns "d"

    \$rest = substr("abcdef", 0, -1);  // returns "abcde"
    \$rest = substr("abcdef", 2, -1);  // returns "cde"
    \$rest = substr("abcdef", 4, -4);  // returns "";
    \$rest = substr("abcdef", -3, -1); // returns "de"
    </code></pre>
    <br><br>
    EOD;

    $fullFunction = $backdrop->indentWindow($completeFunction);
    $datatypesBoxShow = $dataTypesBox->dataTypeList() . "<br><br>";

    $combine = $explanation . $datatypesBoxShow . $fullFunction . $useCase;
    $window1 = $backdrop->windowGen($combine);

    $windows = $window1;
    echo $backdrop->makeBackdrop(
        $windows
    );

    ?>

    <script>
    hljs.highlightAll();
    </script>
</body>

</html>