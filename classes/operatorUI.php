<?php

class operatorUI
{
    public function showUI()    //Displays the task selection box
    {
        echo"Pick an operation to perform";
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
