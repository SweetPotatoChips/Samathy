<?php

class coachService   //Represents one service in the DB
{

    private $origin;    //Origin, is location 
    private $destination;
    private $distance;
    private $time;
    private $stops;


    public function __construct($origin, $dest, $distance, $time)
    {
        if ($checkExisting === true)
        {
            //TODO Should check if coach service already exists
            //If it does, then fill the data with that data and somehow notify that this service already exists?
        }

        $this->origin = $origin;
        $this->destination = $dest;
        $this->distance = $distance;
        $this->time = $time;
    }
        


    public function getLocations()
    {
        $ret['origin'] = $this->origin;
        $ret['destination'] = $this->destination;
        return $ret;
    }
    public function getStops()
    {
        return $this->stops;
    }
    public function getTime()
    {
        return $this->time;
    }
    public function getDistance()
    {
        return $this->distance;
    }

    public function test()
    {
        echo "<p>Testing coachService</p>";
        echo "<p>".$this->getLocationsTest()."</p>";
        echo "<p>".$this->getTimeTest()."</p>";
        echo "<p>".$this->getdistanceTest()."</p>";
        echo "<p>".$this->checkInput()."</p>";
    }

    public function getLocationsTest()
    {
        $data = $this->getLocations();
        if($data['origin'] === $this->origin && $data['origin'] === $this->origin)
        {   return "getLocations() passed"; }
        else 
        {   return "gerLocations() failed";    }
    }

    public function getTimeTest()
    {
        if ($this->getTime() === $this->time)
        {   return "getTime() passed"; }
        else
        {   return "getTime() Failed";  }


    }

    public function getDistanceTest()
    {
        if ($this->getDistance() === $this->distance)
        {   return "getDistance() passed"; }
        else
        {   return "getDistance() Failed";  }
    }

    public function checkInput($origin, $dest, $distance,$time)
    {
        
        if ($this->origin != $origin)
        {   return "checkInput Failed on origin";   }
        if ($this->destination != $dest)
        {   return "checkInput Failed on dest";   }
        if ($this->distance != $distance)
        {   return "checkInput Failed on distance";   }
        if ($this->time != $time)
        {   return "checkInput Failed on time";   }

        return "checkInput() passed";
    }


}
?>

