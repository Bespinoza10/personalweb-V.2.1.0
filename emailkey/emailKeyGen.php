<?php

$file = 'KEY.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current = rand() . "\n";
// Write the contents back to the file
file_put_contents($file, $current);

$url = '../index.php?mailer=yes';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>
