<?php

require 'inc/conn.php';


try {
    $query = "UPDATE hero SET name = 'Buffy Summers' WHERE name = 'Buffy the Vampire Slayer'";
    $conn->exec($query);

    header('Location: index.php') ;

} catch (PDOException $e) {
    echo "Update Failed: " . $e->getMessege();
    exit();
}

?>


    