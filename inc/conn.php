
    <?php
    $host = "localhost";
    $db = "checkin";
    $un = "root";
    $pw = "root";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $un, $pw);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo"connection failed:" . $e->getMessege();
        exit();
    
    }


    ?>