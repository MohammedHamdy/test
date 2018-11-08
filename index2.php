<?php
$path = "/xampp/htdocs/test"; 
$a='';
chdir($path);
exec("git add .");  
$x = exec("git commit -m'message'");
echo $x;
echo "<h3 align = center> Succesfully commited all the files.</h3>";
?>