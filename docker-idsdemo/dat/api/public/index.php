<?php

header('Content-Type: application/json');

$u = filter_input(INPUT_GET, 'u');
$p = filter_input(INPUT_GET, 'p');
$r = filter_input(INPUT_GET, 'r');

if (!$r)
{
	echo json_encode(['status' => 0, 'msg' => 'Welcome to SkyNet API v1']);
	exit;
}

$login = false;
switch ("$u/$p")
{
	case 'root/root':
		$login = $u;
		break;
	default:
		echo json_encode(['status' => 401, 'msg' => 'Bad username/password']);
		exit;
}


switch ($r)
{
	case 'users':
		echo json_encode(['status' => 200, 'users' => [
			['id' => 2943, 'firstname' => 'Alice', 'lastname' => 'Crypto'],
			['id' => 7004, 'firstname' => 'Bob', 'lastname' => 'Crypto'],
		]]);
	default:
		echo json_encode(['status' => 404, 'msg' => 'Not found']);
		exit;
}
