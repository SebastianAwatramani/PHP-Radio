<?php
class client
{

private $dashboard;
private $display;
private $stations = array();

public function __construct(Dashboard $dashboard, IDisplay $display)
{

$this->dashboard = $dashboard;
$this->display = $display;
$this->display->setOutput("88.5");

$this->stations = array(
"89.5",
"93.3",
"95.7",
"102.1",
"106.7"
);

}

public function &dashboard(): Dashboard
{
return $this->dashboard;
}

public function &display(): IDisplay
{
return $this->display;
}

public function getStations(): array
{
return $this->stations;
}

}
