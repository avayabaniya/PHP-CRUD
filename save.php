<?php
require 'database.php';
require 'functions.php';

$name = filter_data('name');
$position = filter_data('position');
$company = filter_data('company');
$gender = filter_data('gender');
$dribbble = filter_data('dribbble');
$twitter = filter_data('twitter');
$linkedin = filter_data('linkedin');
$facebook = filter_data('facebook');

if(is_null($name) || is_null($position) || is_null($company) || is_null($gender)) {
	header('Location: index.php');
	die();
}

$query_string = "insert into people 
	(name, position, company, gender, dribbble, twitter, linkedin, facebook)
	values
	('{$name}', '{$position}', '{$company}', '{$gender}', '{$dribbble}', '{$twitter}', '{$linkedin}', '{$facebook}')";

$result = $db->query($query_string);

if(!$result) {
	die('Could not save the data!');
}

header('Location: index.php');
die();











