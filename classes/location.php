<?php

class location  //Represents a location in the DB
{
    private $name;
    private $latitude;
    private $longditude;

    public function getName()
    {
        return $this->$name;
    }

    public function getLatLong()
    {
        $ret['lat'] = $this->$latitude;
        $ret['long'] = $this->$longditude;
        return $ret;
    }
}

