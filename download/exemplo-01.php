<?php

$fileLink = "https://avatars.githubusercontent.com/u/58152964?s=48&v=4";

$content = file_get_contents($fileLink);

$parse = parse_url($fileLink);
$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

echo "<img src=\"$basename\" >";

?>
