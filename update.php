<?php
require 'database.php';
require 'functions.php';

$id = filter_data('id');
$name = filter_data('name');
$position = filter_data('position');
$company = filter_data('company');
$gender = filter_data('gender');
$dribbble = filter_data('dribbble');
$twitter = filter_data('twitter');
$linkedin = filter_data('linkedin');
$facebook = filter_data('facebook');

if(is_null($name) || is_null($position) || is_null($company) || is_null($gender)) {
	header('Location: edit.php?id='.$id);
	die();
}

$query_string = "update people set
name = '{$name}',
position = '{$position}',
company = '{$company}',
gender = '{$gender}',
dribbble = '{$dribbble}',
twitter = '{$twitter}',
linkedin = '{$linkedin}',
facebook = '{$facebook}'
where id = {$id}";

$result = $db->query($query_string);

if(!$result) {
	die('Could not update the data!');
}

header('Location: index.php');
die();











