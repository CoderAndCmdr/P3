<?php
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo '<p>';
echo implode('<p>', $paragraphs);
echo '</p';
?>
