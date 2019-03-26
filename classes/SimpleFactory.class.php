<?php

class SimpleFactory
{
    public function createDashboard() {
        return new Dashboard();
    }
    public function createDisplay()
    {
        return new Display();
    }
    public function createClient(Dashboard &$dashboard, Display &$display, array $stations)
    {
        return new Client($dashboard, $display, $stations);
    }
    public function createRadioSwitchCommand(Display &$display, string $station)
    {
        return new SwitchToFavoriteStationCommand($display, $station);
    }

}
