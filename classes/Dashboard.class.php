<?php

class Dashboard
{
    private $commands = array();

    /**
     * Dashboard constructor.
     */
    public function __construct()
    {
        $this->commands = array_fill(0, 6, NoCommand::class);
    }

    public function setCommand(int $slot, ICommand $command)
    {
        $this->commands[$slot] = $command;
    }

    public function setKnobCommand(int $slot, ICommand $command)
    {

    }

    public function buttonWasPressed(int $slot)
    {
        $this->commands[$slot]->execute();
    }


}
