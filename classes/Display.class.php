<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 3/26/2019
 * Time: 1:02 PM
 */

class Display
{
    /**
     * @var string
     * The actual station we're switching to
     */
    private $output;

    /**
     * IDisplay constructor.
     */
    public function __construct()
    {
        //Default station
        $this->output = "88.5";
    }


    /**
     * @param $output
     */
    public function setOutput($output) : void {
        $this->output = $output;
    }

    /**
     * @return string
     */
    public function getOutput() : string
    {
        return $this->output . PHP_EOL;
    }
}
