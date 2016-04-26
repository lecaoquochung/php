<?php


// phantomjs
$params = "-v";

exec("phantomjs $params  2>&1", $output, $return_var);

var_dump($return_var);
echo "return_var is: $return_var" . "\n";
var_dump($output);


exit;
?>
