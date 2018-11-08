<?php
$path = "/xampp/htdocs/test"; 
$a='';
chdir($path);
exec("git add .");  
exec("git commit -m'message'");
echo "<h3 align = center> Succesfully commited all the files.</h3>";
?>