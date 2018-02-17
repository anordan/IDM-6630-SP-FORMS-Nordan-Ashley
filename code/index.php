<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Super Powers</title>
            <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <header>

       <?php echo "<h1>My Superhero</h1>";?>
        <nav><?php include 'inc/nav.php' ?></nav>

    </header>
    
<?php

require 'inc/conn.php';

?>

<form action="insert.php" method="post">
<input type="submit" value="Insert">
</form>

<?php

$queryID = "SELECT * FROM hero ORDER BY id DESC";

foreach ($conn->query($queryID) as $value) {



    echo "<form action='update.php' method='post'>
    <input type='text' name='heroID' value='" . $value['id'] . "'>
    <input type='submit' value='update'>
    </form>";

    echo "<form action='delete.php' method='post'>
    <input type='text' name='heroID' value'" . $value['id'] . "'>
    <input type='submit' value='delete'>
    </form>";
}

?>



    </body>
    </html>

