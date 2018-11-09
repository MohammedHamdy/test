<?php
/*$x = shell_exec("git checkout master");
$y = shell_exec("git fetch");
echo $x;
echo '<br/>';
echo $y;
echo '<br/>';
shell_exec("git checkout master");
$key1 = shell_exec("git log --pretty=format:'%h' -n 1");
echo 'Local Hash '.$key1;
shell_exec("git checkout origin/master");
echo '<br/>';*/
$key1 = shell_exec("git log -n1 --format=format:'%H'");
echo 'local hash Hash '.$key1;
echo "<br>";
$remote = shell_exec("git ls-remote https://github.com/MohammedHamdy/test.git HEAD | awk '{ print $1}'");
echo $remote;
echo "<br/>";
if((shell_exec("git log -n1 --format=format:'%H'")) == (shell_exec("git ls-remote https://github.com/MohammedHamdy/test.git HEAD | awk '{ print $1}'"))){
	echo "ASD";
}else{
	echo "ASD2";
}
echo "<h3 align = center> Succesfully commited all the files.</h3>";
?>