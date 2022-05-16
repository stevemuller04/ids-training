<?php

$u = filter_input(INPUT_POST, 'login');
$p = filter_input(INPUT_POST, 'password');

if (strpos($u.$p, "'") !== false) {
	http_response_code(500);
	echo '#1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ';
	echo "' AND enabled=1' at line 1";
	exit;
} else {
	header('Location: /?error=bad_login');
	exit;
}
