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

    public function button(){
            $button = <<<EOD
            <style>
            .windowButton{
                width:20px;
                height:20px;
                margin:2.5px;
                background: radial-gradient(circle at 50% 50%,  rgba(0,146,255,1) 0%, rgba(0,40,80,1) 50%, rgba(0,26,48,1 )  100%);
                border-radius:50%;
                background-position-x: 20%;
                overflow:hidden;
            }
            .highlight{
                position:relative;
                width:15px;
                height:10px;
                background:white;
                border-radius:50%;
                left:calc(10px - 7.5px);
                top:2px;
                background: linear-gradient(180deg, rgba(255,255,255,70%) 0%, rgba(255,255,255,0) 100%);
            }
            </style>
            <div class="windowButton redButton">
                <div class="highlight"></div>
            </div>
            EOD;
            return $button;
        }

        public function topBar(){
            $topBar = <<<EOD
            <style>
            .topPart{
                display:flex;
                flex-direction:row;
                justify-content:flex-start;
                align-items:center;
                
                width:100%;
                height:fit-content;
                margin:0px;
                background: linear-gradient(0deg, rgba(148,148,148,1) 0%, rgba(215,215,215,1) 100%);
                overflow:hidden;
                padding: 2.5px;
            }
            </style>

            <div class="topPart">
                {$this->button()}
                {$this->button()}
                {$this->button()}
            </div>
            EOD;
            return $topBar;
        }


        public function windowGen(){
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
                .innerWindow{
                    background:#f2f2f2;
                    width:100px;
                    height:100px;
                    margin:5px;
                    border-radius:10px;
                    box-shadow: inset 0px 0px 19px -11px rgba(0,0,0,0.71);
                    overflow:hidden;
                }
            </style>

            <div class="windowFrame">
                {$this->topBar()}
                <div class="innerWindow">
                </div>
            </div>
            EOD;
            return $window;
        }
}
?>