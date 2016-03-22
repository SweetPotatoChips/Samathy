<?php

class service   //Represents one service in the DB
{

    private $origin;
    private $destination;
    private $distance;
    private $time;
    private $stops;

    public function getLocations()
    {
        $ret['origin'] = $this->$origin;
        $ret['destination'] = $this->$destination;
        return $ret;
    }
    public function getStops()
    {
        return $this->$stops;
    }
    public function getTime()
    {
        return $this->$time;
    }
    public function getDistance()
    {
        return $this->$distance;
    }

}
?>

