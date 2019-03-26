<?php

/**
 * Class SwitchToFavoriteStationCommand
 */
class SwitchToFavoriteStationCommand implements ICommand
{
    /**
     * @var Display
     */
    private $display;
    /**
     * @var string
     */
    private $station;

    /**
     * SwitchToFavoriteStationCommand constructor.
     * @param $display
     * @param $station
     */
    public function __construct(Display &$display, string $station)
    {
        $this->display = $display;
        $this->station = $station;
    }

    /**
     * Set the display to the correct station
     */
    public function execute() : void
    {
       $this->display->setOutput($this->station);
    }

    /**
     *
     */
    public function undo() : void
    {
        // TODO: Implement undo() method.
    }
}
