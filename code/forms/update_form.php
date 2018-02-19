<form action="db_actions/update.php" method="post">

<label for="site_url">URL</label>
<input type="text" name="site_url" id="site_url" value="<?php echo $site_to_update['site_url']; ?>">

<label for ="site_name">Site Name</label>
<input type= "text" name="site_name" id="site_name" value="<?php echo $site_to_update['site_name']; ?>">

<input type="hidden" name="site_id" value="<?php echo $site_to_update['id']; ?>">

<input type="submit" value='Update Site'>
</form>