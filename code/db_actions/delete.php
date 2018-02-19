<?php
//creates database conn
require 'conn.php';

try {
   // $query = "DELETE FROM sites WHERE id = :site_id";

//prepares and executes query based on request data sent by form, taken from gitgists/hints

//$statement = $conn -> prepare($query);
//$statement -> bindParam(':site_id', $REQUEST['site_id']);
//$statement->execute();
$query = "DELETE FROM sites WHERE id = " . $_REQUEST['site_id'];
$conn->exec($query);

//redirects back to homepage
header ('Location: ../index.php');

} catch (PDOException $e) {
    echo "Delete Failed: " . $e->getMessege();
    $conn = null;
    exit();
}

?>


   