<?php
//sets fiule var used in body to decide which form to use
$file = basename(__FILE__);

//file creates database conn
require 'db_actions/conn.php';

//query string to select info

$query = "SELECT * FROM sites WHERE id = :site_id";

//prepares and executes query based on request, taken from git gists

$statement = $conn->prepare($query);
$statement->bindParam(':site_id', $_REQUEST['site_id']);

$statement->execute();

//creates variable that contains data, help from video

$site_to_update = $statement->fetchAll()[0];

//loads in html element

require 'elements/html.php';
?>