<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 3/26/2019
 * Time: 1:02 PM
 */

class IDisplay
{
    private $output;
    public function setOutput($output) : void {
        $this->output = $output;
    }
    public function getOutput() : string
    {
        return $this->output . PHP_EOL;
    }
}
