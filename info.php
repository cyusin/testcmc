<?php
// 내부 IP 포함될경우만
$ip = array('1.212.48.227', '14.32.250.8');
if (in_array($_SERVER['REMOTE_ADDR'], $ip)) {
	phpinfo();
} else {
	echo "Error";
	exit;
}