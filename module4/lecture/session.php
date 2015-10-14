<?php

//What is a session?
//A session will create a cookie locally, which will get sent to the server
//on every HTTP request

session_start();

echo '<pre>';

$_SESSION['location'] = "austin";

var_dump($_SESSION);



