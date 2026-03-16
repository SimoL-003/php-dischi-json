<?php
// Get content of json file
$disksString = file_get_contents('./disks.json');

// Convert json string to php array
$disksArray = json_decode($disksString, true);

// Get form data
$title = $_POST['title'];
$artist = $_POST['artist'];
$year = $_POST['year'];
$coverUrl = $_POST['cover-url'];
$genre = $_POST['genre'];

// Create php array with new data
$newDisk = [
    'title' => $title,
    'artist' => $artist,
    'year' => $year,
    'cover_url' => $coverUrl,
    'genre' => $genre
];
$disksArray[] = $newDisk;

// Convert php array to json string
$disksString = json_encode($disksArray);

// Save json in disks.json file
file_put_contents('disks.json', $disksString);

// Redirect to index
header('Location: ./index.php');
exit;