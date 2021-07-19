<?php
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);

// copy the handle
$ch2 = curl_copy_handle($ch);

// grab URL (http://www.example.com/) and pass it to the browser
curl_exec($ch2);

// close cURL resource, and free up system resources
curl_close($ch);
?>

<?php
// Create a curl handle
$ch = curl_init();

// Set CURLOPT_USERAGENT option
curl_setopt($ch, CURLOPT_USERAGENT, "My test user-agent");

// Reset all previously set options
curl_reset($ch);

// Send HTTP request
curl_setopt($ch, CURLOPT_URL, 'http://example.com/');
curl_exec($ch); // the previously set user-agent will be not sent, it has been reset by curl_reset

// Close the handle
curl_close($ch);
?>