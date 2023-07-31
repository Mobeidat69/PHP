<?php
// URL to be parsed
$url = "https://www.w3schools.com/php/default.asp";

// Parse the URL
$parsedUrl = parse_url($url);

// Extract the components
$scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
$host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
$path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
$query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
$fragment = isset($parsedUrl['fragment']) ? $parsedUrl['fragment'] : '';

// Output the components
echo "Scheme: " . $scheme . PHP_EOL;
echo "Host: " . $host . PHP_EOL;
echo "Path: " . $path . PHP_EOL;
echo "Query: " . $query . PHP_EOL;
echo "Fragment: " . $fragment . PHP_EOL;
?>
