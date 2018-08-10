<?php
require 'database.php';
require 'functions.php';

$id = filter_data('id');

$result = $db->query("select * from people where id = {$id}");

if(!$result || !$result->num_rows) {
	die('Could the find the person');
}

$person = $result->fetch_assoc();

require 'card.view.php';