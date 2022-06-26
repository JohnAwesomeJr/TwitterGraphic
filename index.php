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
</style>

<body>
    <?php include_once('uiElements/background.php'); ?>
    <?php include_once('uiElements/varType.php'); ?>
    <?php include_once('uiElements/functionMaker.php'); ?>



    <?php
    $function = new functionMaker();
    $varType = new varType();
    $backdrop = new backdrop();



    $typeString = $varType->typeString('String', 0);
    $typeInteger = $varType->typeInteger('Integer', 0);
    $typeFloat = $varType->typeFloat('Float', 0);
    $typeBoolean = $varType->typeBoolean('Boolean', 0);
    $typeArray = $varType->typeArray('Array', 0);
    $typeObject = $varType->typeObject('Object', 0);
    $typeNULL = $varType->typeNULL('NULL', 0);
    $typeResource = $varType->typeResource('Resource', 0);





    $arrayInLine = $varType->typeArray('Array', 1);
    $functionName = "var_dump";
    $variableArray = [$arrayInLine];
    $explanation = "<h1>{$functionName}</h1><br><br>var_dump — Dumps information about a variable.<br><br>";
    $useCase = <<<EOD
    <br>
    <style>
    .hljs{
        border-radius:10px;
    }
    </style>
    This will output the array so you can see what it is.<br>
    eg:<br><br>
    <pre><code class="language-php">
    \$a = array(1, 2, array("a", "b", "c"));<br>
    var_dump(\$a);<br><br>

    <pre>array(3) {
        [0]=&gt;
        int(1)
        [1]=&gt;
        int(2)
        [2]=&gt;
        array(3) {
          [0]=&gt;
          string(1) &quot;a&quot;
          [1]=&gt;
          string(1) &quot;b&quot;
          [2]=&gt;
          string(1) &quot;c&quot;
        }
      }</pre>
      </code></pre>
    <br><br>
    EOD;







    $completeFunction = $function->makeFunction($functionName, $variableArray);
    $fullFunction = $backdrop->indentWindow($completeFunction);

    $dataTypes = <<<EOD
    <h3>Data Types</h3>
    {$typeString}
    {$typeInteger}
    {$typeFloat}
    {$typeBoolean}
    {$typeArray}
    {$typeObject}
    {$typeNULL}
    {$typeResource}
    EOD;

    $dataTypesInBox = $backdrop->indentWindow($dataTypes);
    $combine = $explanation . $fullFunction . $useCase  . $dataTypesInBox;
    echo $backdrop->makeBackdrop(
        $backdrop->windowGen($combine)
    );

    ?>

    <script>
    hljs.highlightAll();
    </script>
</body>

</html>