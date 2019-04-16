<?php

class SimpleFactory
{
    public function createClient(array $stations)
    {
        //The dashboard is the invoker.  Like a remote control, it contains various commands linked to various buttons and knobs
        $dashboard = $this->createDashboard();

        //The display is the text output that shows the station name
        $display = $this->createDisplay();

        return new Client($dashboard, $display, $stations);
    }

    public function createDashboard()
    {
        return new Dashboard();
    }

    public function createDisplay()
    {
        return new Display();
    }

    public function createRadioSwitchCommand(Display &$display, string $station)
    {
        return new SwitchToFavoriteStationCommand($display, $station);
    }

}
