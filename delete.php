<?php
require 'database.php';
require 'functions.php';

$id = filter_data('id');

$result = $db->query("delete from people where id = {$id}");

if(!$result) {
	die('Could not delete data!');
}

header('Location: index.php');
die();