<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Ashley's Top 10</title>
            <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <header>
        <?php

        echo "<h1>Ashley's Top 10 Albums</h1>";

    ?>
    </header>


    <?php
    $host = "localhost";
    $db = "week03";
    $un = "root";
    $pw = "root";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $un, $pw);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo"connection failed:" . $e->getMessege();
    }

    $query = "SELECT * FROM albums";

foreach ($conn ->query($query) as $album) {
    echo "<div>";
    echo "<h2>" . $album['ID'] . "</h2>";
    echo "<h3>" . $album['title'] . "</h3>";
    echo "<h4>" . $album['artist'] . "</h4>";
    echo "<h4>" . $album['year'] . "</h4>";
    echo "<img src='" . $album['cover'] . "'>";
    echo "</div>";
};

    ?>



    </body>
    </html>