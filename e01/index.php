<?php

if($_SERVER["REQUEST_URI"]=='/find')
    require "find.html";
else if($_SERVER["REQUEST_URI"]=='/showdetails')
    require "show.php";
else if($_SERVER['REQUEST_URI']=='/insert')
    require "name.php";
else if($_SERVER['REQUEST_URI']=='/form')
    {echo "<h1>Enter Details</h1>";
    require "name.view.php";
    }
