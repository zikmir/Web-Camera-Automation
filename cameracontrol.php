<?php
$myfile = fopen("phpcamdata.txt", "w") or die("Unable to open file!");

if ($_POST['leftb'])
{ echo "Left is pressed";
	$txt = -1;}


else if ($_POST['rightb'])
{ echo "Right is pressed";
	$txt = 1;}


fwrite($myfile, $txt);
fclose($myfile);



sleep(1);

$myfile = fopen("phpcamdata.txt", "w") or die("Unable to open file!");
$txt = 0;
fwrite($myfile, $txt);

fclose($myfile);

?>
