<?php

function filter_data($key){
	return isset($_GET[$key]) && !empty(trim($_GET[$key])) ? htmlspecialchars(trim($_GET[$key])) : null;
}