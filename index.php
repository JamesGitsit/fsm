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

echo 'Input: 1101<br>';
echo 'Remainder: ' . $fsm->modThree("1101");
echo '<p>';
echo 'Input: 1110<br>';
echo 'Remainder: ' . $fsm->modThree("1110");
echo '<p>';
echo 'Input: 1111<br>';
echo 'Remainder: ' . $fsm->modThree("1111");
echo '<p>';

?>
