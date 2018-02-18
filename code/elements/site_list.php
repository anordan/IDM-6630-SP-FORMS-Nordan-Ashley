<?php
$query = "SELECT * FROM sites ORDER BY id DESC";

//echo "<ul>";

//creates a list item for each site

foreach ($conn -> query($query) as $site) {
echo "<ul>";
    echo "<li><a href='" . $site['site_url'] . "'>" . $site['site_name'] . "</a></li>";
echo "<li><form class='site-edit update' action='stage.php' method='post'><input type='hidden' name='site_id' value='" . $site['id'] . "'><input type='submit' id='edit'></form></li>"
    echo "<li><form class='site-edit delete' action='db_action/delete.php' method= 'post'><input type='hidden' name='site_id' value='".$site['id'] . "'><input type='submit' id='delete'></form></li>";  
echo "</ul>";
}

?>