<?php
//creates database conn
require 'conn.php';


try {
    //creates query string
    $query = "INSERT INTO sites (site_url , site_name) VALUES (:site_url , :site_name)";
    
    //prepares and executes query based on request data sent by form, taken from gitgists/hints

    $statement = $conn -> prepare($query);
    $statement -> bindParam(':site_url' , $_REQUEST['site_url']);
    $statement -> bindParam(':site_name' , $_REQUEST['site_name']);

    $statement ->execute();

    //redirects back to homepage
    header('Location: ../index.php') ;

} catch (PDOException $e) {
    echo "Insert Failed: " . $e->getMessege();
    $conn = null;
    exit();
}

?>


   