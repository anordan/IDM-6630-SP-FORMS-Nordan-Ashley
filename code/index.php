<?php
//sets file var used in body to determine what form to use
$file = basename(__FILE__);

//file creates database conn
require 'db_actions/conn.php';

//file loads in html ele's
require 'elements/html.php';
?>

