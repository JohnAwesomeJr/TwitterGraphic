<?php

class functionMaker
{
    public function makeFunction($functionName, $insideBracketsContent = [])
    {
        $separateByComma = "";
        $arraySize = sizeof($insideBracketsContent) - 1;
        foreach ($insideBracketsContent as $key => $value) {
            if ($key != $arraySize) {
                $separateByComma = $separateByComma . $insideBracketsContent[$key] . "<span class='brackets'>,</span>";
            }
            if ($key == $arraySize) {
                $separateByComma = $separateByComma . $insideBracketsContent[$key];
            }
        }

        $makeFunction = <<<EOD
        <style>
        .functionName{
            font-size: 30px; 
        }
        .brackets{
            position: relative;
            bottfunctionom:-4px;
            font-size: 50px;
            color:#d60000;
        }
        </style>
        <span class="functionName" >
            {$functionName}
        </span>
        <span class="brackets">
        (
        </span>
        {$separateByComma}
        <span class="brackets">
        );
        </span>
        EOD;
        return $makeFunction;
    }
}