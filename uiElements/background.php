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
    public function makeBackdrop()
    {
        $background = <<<EOD
        <div class="backdrop">
        
        </div>
        EOD;
        $output = $background;
        return $output;
    }
}
?>