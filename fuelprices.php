

<?php
// Set the content type to JSON
header('Content-Type: application/json');

// Allow cross-origin requests (CORS)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Read and output the JSON file
echo file_get_contents('data.json');


?>
