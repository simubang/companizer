<?php
$maincontent = ob_get_contents();
ob_end_clean();


$mainfile = ($main);
$handle = fopen($main, "r");
$mainTemplate = fread($handle, filesize($mainfile));


$navigationpath=$path.'template/navigation.php';
$navigationfile = ($navigationpath);
$handle = fopen($navigationpath, "r");
$navigationcontent = fread($handle, filesize($navigationfile));

$sidenavigationpath=$path.'template/sideNavigation.php';
$sidenavigationfile = ($sidenavigationpath);
$handle = fopen($sidenavigationpath, "r");
$sidenavigationcontent = fread($handle, filesize($sidenavigationfile));


fclose($handle);
$content= str_replace("++navigation++", $navigationcontent, $mainTemplate);
$content= str_replace("++sidenavigation++", $sidenavigationcontent, $content);
$content= str_replace("++content++", $maincontent, $content);

$content= str_replace("++path++", $path, $content);
echo $content; ?>