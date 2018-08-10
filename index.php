<?php

require 'database.php';

$result = $db->query('select * from people');

$people = $result->fetch_all(MYSQLI_ASSOC);

require 'index.view.php';