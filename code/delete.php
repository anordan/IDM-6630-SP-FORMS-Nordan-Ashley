
<?php

require 'inc/conn.php';
include 'inc/nav.php';

try {
    $query = "DELETE FROM hero WHERE id = " . $_REQUEST['heroID'];
    $conn->exec($query);
    echo "<h1>Delete</h1>";


} catch (PDOException $e) {
    echo "Delete Failed: " . $e->getMessege();
    $conn = null;
    exit();
}

?>


   