<?php
include "admin_Template/header.php";
include "admin_Template/nav.php";
?>



<form action="../dbconfig.php" method="POST">
<input type="text" name="name"placeholder="name">
<input type="text" name="waste"placeholder="waste">
<input type="text" name="price"placeholder="price">
<input type="text" name="quantity"placeholder="quantity">
<input type="text" name="wweight"placeholder="wweight">
<input type="text" name="wdesc"placeholder="wdesc">
<input type="text" name="imgl"placeholder="imgl">
<input type="text" name="wdate"placeholder="wdate">
<input type="text" name="wstatus"placeholder="wstatus">
<button type="submit" name="submit">submit</button>
</form>



<?php
include "admin_Template/footer.php";
?>

