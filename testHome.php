<!DOCTYPE html>
<html>
	<head>
		<title>Tests</title>
	</head>
	<body>
		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">

<?php 

//We're using a Front Controller Pattern here. So this page handles everything.


include "includes/classHeaderInclude.php";
include "includes/bootstrap.php";
include "includes/header.php";



echo "Running tests...";

//Test Creation of operator UI methods

$UI = new operatorUI();  //We want a new UI object


//UI class tests
$UI->test();


$task = $UI->pickTask('add');  //Create a service object for the add task
$task->test();
$task = $UI->pickTask('amend');  //Create a service object for the add task
$task->test();
$task = $UI->pickTask('delete');  //Create a service object for the add task
$task->test();
$task = $UI->pickTask('bookingReport');  //Create a service object for the add task
$task->test();

//maybe try to check that it creates an actual object here

//test values
$name   = "TEST";
$lat = "42";
$long = "1010";

$location = locationFactory::create($name, $lat, $long);
$location->test($name, $lat, $long);

$origin = locationFactory::create('TEST', '42','1010');
$dest = locationFactory::create('TEST2','1010','42');

$coachService = coachServiceFactory::create($origin, $dest,'66','88',true);

$coachService->test($origin, $dest, 66,88);


echo "<h2>Tests Complete</h2>";
$UI->showUI();             //Show the initial UI->

    //We should have a UI->now. 


?>


</div>
</body>
</html>
