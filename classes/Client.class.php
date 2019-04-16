<?php


/**
 * Class client
 *
 */
class client
{

    /**
     * @var Dashboard
     * Holds a reference to our invoker
     */
    private $dashboard;
    /**
     * @var Display
     * Holds a reference to our screen output
     */
    private $display;
    /**
     * @var array
     * These are the stations one can switch to
     */
    private $stations = array();

    /**
     * client constructor.
     * @param Dashboard $dashboard
     * @param Display $display
     * @param array $stations
     */
    public function __construct(Dashboard $dashboard, Display $display, array $stations)
    {
        $this->dashboard = $dashboard;
        $this->display = $display;
        $this->stations = $stations;
    }

    /**
     * @return Dashboard
     * Returns a reference to the dashboard for direct access to dashboard public functions
     */
    public function &dashboard(): Dashboard
    {
        return $this->dashboard;
    }

    /**
     * @return Display
     * Returns a reference to the display for direct access to display publich functions
     */
    public function &display(): Display
    {
        return $this->display;
    }

    /**
     * @return array
     * Returns an array of stations
     */
    public function getStations(): array
    {
        return $this->stations;
    }

    /**
     * @param SimpleFactory $factory
     * This method creates a set of radio switch commands, each tied to a different radiostation.  When the user selects a station, the
     * correct command is executed
     */
    public function setRadioSwitchCommands(SimpleFactory $factory) : void
    {
        for ($i = 0; $i < count($this->stations); $i++) {

            $this->dashboard()->setButtonCommand(
                $i,
                $factory->createRadioSwitchCommand(
                    $this->display(),
                    $this->stations[$i]
                )
            );
        }

    }


}
