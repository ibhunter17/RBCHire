<?php
$command = $_POST['cmd'];

$outputText = '';
if ($command == 'help'){
	$outputText .= "YOU GET NO HELP";
}

echo $outputText;
?>