
<?php

require 'inc/conn.php';


try {
    $query = "INSERT INTO hero (hero_name) VALUES ('Buffy the Vampire Slayer')";
    $conn -> exec($query);

    $queryInsert = "SELECT * FROM hero";
    foreach ($conn -> query($queryInsert) as $hero) {
        echo "<h1>" . $hero["name"] . "</h1>';"}

} catch (PDOException $e) {
    echo "Insert Failed: " . $e->getMessege();
    $conn = null;
    exit();
}

?>


   