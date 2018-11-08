<?php
$path = "/xampp/htdocs/test"; 
$a='';
chdir($path);
//exec("git add .");  
$x = exec("git log --pretty=format:'%h' -n 1");
echo $x;
echo "<h3 align = center> Succesfully commited all the files.</h3>";
?>