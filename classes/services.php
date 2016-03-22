<?php

interface task
{
    public function performService($args);
    public function getName();
}



class addService implements task   //Takes a service object, and adds it to the DB
{
    private $name = "add";
    public function getName()
    {
        return $this->$name;
    }

    public function performService($args)
    {
        $this->add($args);
    }


    private function add($s)
    {
    }
}

class amendService  implements task//Takes a field, and some data, and a service object and makes a change to that service.
{
    private $name = "add";
    public function getName()
    {
        return $this->$name;
    }

    public function performService($args)
    {
        $this->amend($args[0], $args[1], $args[2]);
    }

    private function amend($field, $data, $s)
    {
    }
}

class deleteService implements task//Takes a service object, and removes it from the database. Might also remove any bookings attached to this service.
{
    private $name = "add";
    public function getName()
    {
        return $this->$name;
    }

    public function performService($args)
    {
        $this->delete($args);
    }

    private function delete($s)
    {
    }
}

class bookingReport implements task //This is technically George's thing, i think...
{
    private $name = "add";
    public function getName()
    {
        return $this->$name;
    }

    public function performService($args)
    {
        $this->report();
    }

    private function report()
    {
    }

}

?>

