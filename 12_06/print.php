<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

 

require_once 'dbconf.php';
require_once 'function.php';


 
 $id =$_GET['id'];

Studentdetails($id,$connect);


?>


</body>
</html>