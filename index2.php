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
$key1 = shell_exec('git log -n1 --format=format:"%H"');
echo 'local hash: '.$key1;
echo "<br>";
$remote = shell_exec('git ls-remote https://github.com/MohammedHamdy/test.git HEAD');
$aaa = str_replace('HEAD', '', $remote);

echo 'serve hash: '.$aaa;
echo "<br/>";
if(trim($key1) === trim($aaa)){
	echo "ASD";
}else{
	echo "ASD2";
}

$checkoutMaster = shell_exec("git checkout master");
echo "<br/> ".$checkoutMaster;

        if($checkoutMaster !== "Your branch is up to date with 'origin/master'. "){
            $localModify = "file modifyed";
        }else{
            $localModify = "no file modifyed";
        }
echo "<br/>".$localModify;		
echo "<h3 align = center> Succesfully commited all the files.</h3>";
?>