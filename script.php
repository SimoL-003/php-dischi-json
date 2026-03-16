<?php

// Get content of json file
$disks_string = file_get_contents('./disks.json');

// Convert json string to php array
$disks_array = json_decode($disks_string, true);