<?php
exec("git add -A");
$x = exec("git commit -m 'asd'");
echo $x;
echo "<h3 align = center> Succesfully commited all the files.</h3>";
?>