<?php

class location  //Represents a location in the DB
{
    private $name;
    private $latitude;
    private $longditude;

    public function __construct($name,$latitude, $longditude)
    {
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longditude = $longditude;

        //TODO Should check if service already exists. 
        //IF it does, then fill this class with that location data.
        //Else just fill it with the data we've been given

    }

    public function getName()
    {
        return $this->name;
    }

    public function getLatLong()
    {
        $ret['lat'] = $this->latitude;
        $ret['long'] = $this->longditude;
        return $ret;
    }

    public function test($name, $lat, $long)
    {
        echo "<p>testing location</p>";
        echo "<p>".$this->getNameTest()."</p>";
        echo "<p>".$this->getLatLongTest()."</p>";
        echo "<p>".$this->checkInput($name, $lat,$long)."</p>";
    }


    public function getNameTest()
    {
        if ($this->getName() === $this->name)
        {   return "getName() passed";  }
        else
        {   return "getName() failed";  }
    }

    public function getLatLongTest()
    {
        $data = $this->getLatLong();
        if($data['lat'] === $this->latitude and $data['long'] === $this->longditude)
        {   return "getLatLong() passed";   }
        else
        {   return "getlatLong failed";     }
    }

    public function checkInput($n, $lt, $lng)
    {
        if ($this->name === $n && $this->latitude === $lt && $this->longditude === $lng)
        {   return "inputs valid. Location Factory passed"; }
        else
        {   return "Inputs invalid. Location Factory failed"; }
    }

                
                

}

