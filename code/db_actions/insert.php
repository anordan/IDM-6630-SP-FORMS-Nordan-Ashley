<?php

require 'inc/conn.php';


try {
    $query = "INSERT INTO hero (name) VALUES ('". $_REQUEST['hero_name'] . "')";
    $conn -> exec($query);

    header('Location: index.php') ;

} catch (PDOException $e) {
    echo "Insert Failed: " . $e->getMessege();
    $conn = null;
    exit();
}

?>


   