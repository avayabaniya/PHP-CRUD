<?php

$db = new mysqli('127.0.0.1', 'root', '', 'c1');


if($db->connect_errno) {
	die('Problem connecting to database');
}