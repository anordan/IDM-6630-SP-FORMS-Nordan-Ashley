<body>
<section>
<header>
    <h1><a href="/">SITE SWAP</a></h1>
</header>

<?php
//body file ,, stage file,, then loads update form

if ($file == "stage.php") {
    require 'forms/update_form.php';
} else {
    require 'forms/insert_form.php';
}
    require 'site_list.php'
?>
</section>
</body>