<?php

/**
 * Class Dashboard
 */
class Dashboard
{
    /**
     * @var array
     * Arrays of Icommands that can be executed by slot
     */
    private $commands = array();
    private $knobCommands = array();

    /**
     * Dashboard constructor.
     */
    public function __construct()
    {
        //The array is filled with fake commands to avoid null errors.  Not really important for this test, but good practice
        $this->commands = array_fill(0, 6, NoCommand::class);
    }

    /**
     * @param int $slot
     * @param ICommand $command
     * This methods sets a command.  A "slot" is a button
     */
    public function setCommand(int $slot, ICommand $command) : void
    {
        $this->commands[$slot] = $command;
    }

    /**
     * @param int $slot
     * @param ICommand $command
     */
    public function setKnobCommand(int $slot, ICommand $command) : void
    {
        $this->knobCommands[$slot] = $command;
    }

    /**
     * @param int $slot
     * Execute command
     */
    public function buttonWasPressed(int $slot): void
    {
        $this->commands[$slot]->execute();
    }
    /**
     * @param int $slot
     * Execute command
     */
    public function knobWasTurned(int $slot) : void
    {
        $this->knobCommands[$slot]->execute();
    }


}
