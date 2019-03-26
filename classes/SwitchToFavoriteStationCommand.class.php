<?php

class SwitchToFavoriteStationCommand implements ICommand
{
    private $display;
    private $station;

    /**
     * SwitchToFavoriteStationCommand constructor.
     * @param $display
     * @param $station
     */
    public function __construct(IDisplay &$display, string $station)
    {
        $this->display = $display;
        $this->station = $station;
    }


    public function execute() : void
    {
       $this->display->setOutput($this->station);
    }

    public function undo() : void
    {
        // TODO: Implement undo() method.
    }
}
