<html>
<body>



<?php
 echo ">>".$_GET['XSS'];
 ?>
 
 <form action = "./XSS.php" method= "get">
 <input type="text", name="XSS" ><br>
 <input type="submit", name="Submit" >
 </form>
 </body>
 </html>