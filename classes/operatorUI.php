<?php

class operatorUI
{
    public function showUI()    //Displays the task selection box
    {

        echo '
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <h1>Operator Home</h1>
            </div>
            <div class="col-xs-6 col-md-4">
                <h3>Pick an operation to perform</h3>";
            </div>
        </div>
        ';
        //Set the divs for the forms for the options.
        echo '                  
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <p class="text-center"> Add</p>
            </div>
            <div class="col-xs-6 col-md-4">
                <p class="text-center"> Amend</p>
            </div>
            <div class="col-xs-6 col-md-4">
                <p class="text-center"> delete</p>
            </div>
        </div>
        ';

    }
    public function pickTask($task)
    {
        taskFactory::create($task);
    }
    
    public function setError($err)
    {
        $this->$errorString = $err;
        $this->$error = true;
    }

    
}
