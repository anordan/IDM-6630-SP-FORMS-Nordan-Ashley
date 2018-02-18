<?php

require 'inc/conn.php';

try {
    $query = "DELETE FROM hero WHERE id = " . $_REQUEST['heroID'];
    $conn->exec($query);


} catch (PDOException $e) {
    echo "Delete Failed: " . $e->getMessege();
    $conn = null;
    exit();
}

?>


   