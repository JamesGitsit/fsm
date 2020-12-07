<?php

/*
James Vela
407-340-4411
jamesjjimmy@yahoo.com
*/

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('autoloader.php');

Use ModThree\FSM;

$fsm = new FSM();

echo 'Input: 1111<br>';
echo 'Result: ' . $fsm->modThree("1111");
echo '<p>';
echo 'Input: 1010<br>';
echo 'Result: ' . $fsm->modThree("1010");
echo '<p>';
echo 'Input: 1011<br>';
echo 'Result: ' . $fsm->modThree("1011");
echo '<p>';

?>