<?php

$content = file_get_contents($argv[1]);
$content = preg_replace('/\n/si', '', $content);
$content = preg_replace('/<\!--.*?-->/si', '', $content);
$content = preg_replace('/\s{2,}/si', ' ', $content);
$content = preg_replace('/>\s+</si', '><', $content);

echo $content;