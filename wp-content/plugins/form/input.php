
<h1>Hi Sourav please add students here!</h1>
<?php
require("backend.php");
?>
<form method="post" action="http://localhost/phptutorial/wordpress/wp-content/plugins/form/backend.php"   >

    <label for="name" placeholder="Candidate name">Name</label>
    <input name="name" type="text" placeholder="Enter candidates name">
    <button name="submit">Submit</button>
    <p><?php  echo $display ?></p>
</form>


 <!-- action="http://localhost/phptutorial/wordpress/wp-content/plugins/form/backend.php"  -->