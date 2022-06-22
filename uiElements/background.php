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
                display:flex;
                flex-direction:flex-start;
                justify-content:flex-start;
                align-items:center;
                
                width:100%;
                height:fit-content;
                margin:0px;
                background: linear-gradient(0deg, rgba(148,148,148,1) 0%, rgba(215,215,215,1) 100%);
                overflow:hidden;
                padding: 2.5px;

            }
            .windowButton{
                width:20px;
                height:20px;
                margin:2.5px;
                background:blue;
                border-radius:50%;
                background: radial-gradient(circle at 40% 40%, rgba(255,255,255,1) 0%, rgba(250,250,212,1) 5%, rgba(58,145,177,1) 45%, rgba(29,58,117,1) 100%);
                background-position-x: 20%;
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
                <div class="windowButton"></div>
                <div class="windowButton"></div>
                <div class="windowButton"></div>

            </div>
            <div class="innerWindow">
            </div>
        </div>
        EOD;
        return $window;
    }
}
?>