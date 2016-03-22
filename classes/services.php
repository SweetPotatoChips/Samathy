<?php


interface task
{
    public function performService();
}



class task
{



class addService    //Takes a service object, and adds it to the DB
{
    public function add($s)
    {
    }
}

class amendService  //Takes a field, and some data, and a service object and makes a change to that service.
{
    public function amend($field, $data)
    {
    }
}

class deleteService //Takes a service object, and removes it from the database. Might also remove any bookings attached to this service.
{
    public function delete($s)
    {
    }
}

class bookingReport //This is technically George's thing, i think...
{
    public function report()
    {
    }

}

?>

