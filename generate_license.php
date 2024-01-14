<?php
// Generate a random license key
$licenseKey = bin2hex(random_bytes(16));

// Save the license key to a file
file_put_contents('license_key.txt', $licenseKey);

// Display the license key
echo $licenseKey;
?>
