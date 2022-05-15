<?php
echo "<h1>Hello</h1>";
$result = shell_exec('python3 whatsapp.py'); 
#. escapeshellarg(json_encode($data)));

// Decode the result
$resultData = json_decode($result, true);

// This will contain: array('status' => 'Yes!')
var_dump($resultData);
?>