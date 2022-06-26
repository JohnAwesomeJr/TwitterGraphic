<?php

class varType
{
    private function varType($color, $variableName, $size = 0)
    {
        if ($size == 0) {
            $sizeproperty = "";
        }
        if ($size == 1) {
            $sizeproperty = "font-size: 30px;";
        }
        $make = <<<EOD
            <style>
                .typeArray{
                    display: inline-block;
                    position: relative;
                    bottom:5px;
                    padding:5px;
                    margin:10px 10px 10px 0px;
                    width: fit-content;
                    border-radius:5px;
                    color:black;
                }
            </style>
            <span style="background:{$color}; {$sizeproperty}" class="typeArray">{$variableName}</span>
        EOD;
        return $make;
    }
    public function typeString($varName, $size)
    {
        return $this->varType('#ffa3a3', $varName, $size);
    }
    public function typeInteger($varName, $size)
    {
        return $this->varType('#ffd666', $varName, $size);
    }
    public function typeFloat($varName, $size)
    {
        return $this->varType('#faff66', $varName, $size);
    }
    public function typeBoolean($varName, $size)
    {
        return $this->varType('#66ff73', $varName, $size);
    }
    public function typeArray($varName, $size)
    {
        return $this->varType('#66e3ff', $varName, $size);
    }
    public function typeObject($varName, $size)
    {
        return $this->varType('#e066ff', $varName, $size);
    }
    public function typeNULL($varName, $size)
    {
        return $this->varType('#919191', $varName, $size);
    }
    public function typeResource($varName, $size)
    {
        return $this->varType('#bdbdbd', $varName, $size);
    }
}