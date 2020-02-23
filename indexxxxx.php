<?php
// created by Funtrat0r @ V3rmillion
$keys = array('TESTKEY',); // change these to your keys. put in ' s. Seperate with commas (,)
$users = array('2117149',); // change these to your userids. put in ' s. Seperate with commas (,)
$ip = array('119.160.48',); // change these to your ip's. put in ' s. Seperate with commas (,) , also the ip address is random
$sub = $_GET["key"];
$subuser = $_GET["user"];
$subip = $_SERVER['REMOTE_ADDR'];
if (in_array($sub,$keys,TRUE)) if (in_array($subuser,$users,TRUE)) if (in_array($subip,$ip,TRUE)) {
print('~ True ~');
}
else
{
print ($_SERVER['REMOTE_ADDR']);
}
?>