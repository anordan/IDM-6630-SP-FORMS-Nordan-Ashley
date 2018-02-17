
<?php

require 'inc/conn.php';


try {
    $query = "UPDATE hero SET name = 'Buffy Summers' WHERE name = 'Buffy the Vampire Slayer'";
    $conn->exec($query);

    $queryUpdate = "SELECT * FROM hero";
    foreach ($conn->query($queryUpdate) as $value) {
        echo "<h1>" . $value["name"] . "</h1>";
    }

} catch (PDOException $e) {
    echo "Update Failed: " . $e->getMessege();
    exit();
}

?>


    