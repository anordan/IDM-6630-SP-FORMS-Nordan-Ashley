<?php
//creates database conn
require 'conn.php';


try {
    //creates query string
    $query = "UPDATE sites SET site_url = :site_url , site_name = :site_name WHERE id = :site_id";

    //prepares and executes query based on request data sent by form, taken from gitgists/hints
    $statement = $conn -> prepare($query);
    $statement -> bindParam (':site_url' , $_REQUEST['site_url']);
    $statement -> bindParam (':site_name' , $_REQUEST['site_name']);
    $statement -> bindParam (':site_id' , $_REQUEST['site_id']);

    $statement -> execute();


    //redirects back to home page
    header('Location: ../index.php') ;

} catch (PDOException $e) {
    echo "Update Failed: " . $e->getMessege();
    exit();
}

?>


    