<?php

// Return php array from json file
function getArray($jsonFile)
{
    // Get content of json file
    $jsonString = file_get_contents($jsonFile);
    // Convert json string to php array
    return json_decode($jsonString, true);
}
;