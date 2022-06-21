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
                background:gray;
                width:100px;
                height:100px;
                box-shadow: 6px 18px 25px 0px rgba(0,0,0,0.24);
                border-radius:10px;
                overflow:hidden;
            }
            .topPart{
                background:blue;
                width:100%;
                height:20px;
            }
        </style>
        <div class="windowFrame">
            <div class="topPart">
            </div>
        </div>
        EOD;
        return $window;
    }
}
?>