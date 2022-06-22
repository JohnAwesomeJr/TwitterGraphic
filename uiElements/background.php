<style>
.backdrop {
    height: 100vh;
    background: rgb(9, 9, 121);
    background: linear-gradient(180deg, rgba(9, 9, 121, 1) 0%, rgba(0, 212, 255, 1) 100%);
}
</style>



<?php
class backdrop
{
    public function makeBackdrop($insert = "")
    {
        $background = <<<EOD
        <style>
            .backdrop{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
            }
        </style>
        <div class="backdrop">
        {$insert}
        </div>
        EOD;
        $output = $background;
        return $output;
    }

    public function window()
    {
        $window = <<<EOD
        <style>
            .windowFrame{
                background:#ededed;
                width:fit-content;
                height:fit-content;
                box-shadow: 6px 18px 25px 0px rgba(0,0,0,0.24);
                border-radius:10px;
                overflow:hidden;
            }
            .topPart{
                background:blue;
                width:100%;
                height:20px;
            }
            .innerWindow{
                background:#f2f2f2;
                width:100px;
                height:100px;
                margin:5px;
                border-radius:10px;
                box-shadow: inset 0px 0px 19px -11px rgba(0,0,0,0.71);
                
            }
        </style>
        <div class="windowFrame">
            <div class="topPart">
            </div>
            <div class="innerWindow">
            </div>
        </div>
        EOD;
        return $window;
    }
}
?>