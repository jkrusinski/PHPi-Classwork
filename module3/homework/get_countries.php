<?php

//Get country info from API
$countryJSON = @file_get_contents('http://restcountries.eu/rest/v1/name/' . $_POST['query']);

echo $countryJSON;

