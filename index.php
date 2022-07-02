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

p {
    margin-bottom: 20px;
}
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
    $arrayType1 = $varType->typeArray('$Array', 1);
    $intType1 = $varType->typeInteger('$integer', 1);

    $intType1second = $varType->typeInteger('0', 1);
    $intType1third = $varType->typeInteger('1', 1);


    $functionName = "count";
    $variableArray = [$arrayType1, $intType1];
    $completeFunction = $function->makeFunction($functionName, $variableArray);
    $firstExsample = $function->makeFunction($functionName, [$arrayType1, $intType1second]);
    $firstExsample1 = $function->makeFunction($functionName, [$arrayType1]);
    $secondExsample = $function->makeFunction($functionName, [$arrayType1, $intType1third]);
    $explanation = <<<EOD
    <h1>{$functionName}</h1><br>
    count — Counts all elements in an array or in a Countable object.
    <br><br>
    EOD;
    $useCase = <<<EOD
    <br>
    <pre><code class="language-php">
    \$array = Array
    (
        [0] => 'el1'
        [1] => 'el2'
        [2] => 'el3'
        [3] => Array
            (
                [0] => 'newArrayEl1'
                [1] => 'newArrayEl2'
                [2] => 'newArrayEl3'
                [3] => 'newArrayEl4'
            )
    
    )
    </code></pre>
    <br><br>
    <p>If the array looks like the example above, entering a 0 in the second argument will <b>return 4</b> because there are only four elements in the first level of the array.</p>
    {$firstExsample} &nbsp;&nbsp;&nbsp; <b>or</b> &nbsp;&nbsp;&nbsp; {$firstExsample1}
    <p>if you enter a 1 in the second argument it will <b>return 8</b> because it counts all of the elements, even if the aray is multidimensional with arrays inside arrays.</p>
    {$secondExsample}
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