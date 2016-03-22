<!DOCTYPE html>
<html>
	<head>
		<title>Make Booking</title>
	</head>
	<body>
		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">

<?php 

//We're using a Front Controller Pattern here. So this page handles everything.

include "includes/classHeaderInclude.php";
include "includes/bootstrap.php";
include "includes/header.php";

$UI = new operatorUI();  //We want a new UI object

if ($_GET["task"] == "1")  //If this is the form response
{
    $task = $UI.pickTask($_POST['task']);  //Create a service object for the correct task

    //TODO We can probably concatinate a few of these Ifs into one if statement

    if ($task.getname() == "add")   //If the task we selected was to add a new coach
    {
        $newService = coachServiceFactory::create(locationFactory::create($_POST['origin'], $_POST['lat'],$_POST['long']),locationFactory::create($_POST['dest'],$_POST['lat'],$_POST['long']), $_POST['distance'], $_POST['time'], true);

        if (!$task.performTask($newService))    // Create the new service - Returns false on fail
        {
            $UI.setError("Task: ".$task.getName()." Failed with error: ".$task.getError()); 
        }
    }

    else if ($task.get_Name() === "delete")
    {   
        $service = coachservicefactory::create(locationfactory::create($_post['origin'], $_post['lat'],$_post['long']),locationfactory::create($_post['dest'],$_post['lat'],$_post['long']), $_post['distance'], $_post['time'], true);
        if (!$task.performTask($service))    // Create the new service - Returns false on fail
        {
            $UI.setError("Task: ".$task.getName()." Failed with error: ".$task.getError()); 
        }

    }
    else if ($task.get_Name() === "amend")
    {   
        $service = coachservicefactory::create(locationfactory::create($_post['origin'], $_post['lat'],$_post['long']),locationfactory::create($_post['dest'],$_post['lat'],$_post['long']), $_post['distance'], $_post['time'], true);
        if (!$task.performTask($_POST['fieldname'],$_POST['data'],$service))    // Create the new service - Returns false on fail
        {
            $UI.setError("Task: ".$task.getName()." Failed with error: ".$task.getError()); 
        }
    }
    else if ($task.get_Name() === "bookingReport")  //Booking report requires no args
    {   
        if (!$task.performTask($_POST['fieldname'],$_POST['data'],$service))    // Create the new service - Returns false on fail
        {
            $UI.setError("Task: ".$task.getName()." Failed with error: ".$task.getError()); 
        }

    }


}
$UI::showUI();             //Show the initial UI!

    //We should have a UI now. 


?>


</div>
</body>
</html>






