<?php
require_once "varType.php";
require_once "varType.php";
require_once('background.php');



class listOfDatatypes
{
    public function dataTypeList()
    {
        $varType = new varType();
        $typeString = $varType->typeString('String', 0);
        $typeInteger = $varType->typeInteger('Integer', 0);
        $typeFloat = $varType->typeFloat('Float', 0);
        $typeBoolean = $varType->typeBoolean('Boolean', 0);
        $typeArray = $varType->typeArray('Array', 0);
        $typeObject = $varType->typeObject('Object', 0);
        $typeNULL = $varType->typeNULL('NULL', 0);
        $typeResource = $varType->typeResource('Resource', 0);

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
        $backdrop = new backdrop();
        $dataTypesInBox = $backdrop->indentWindow($dataTypes);
        return $dataTypesInBox;
    }
}