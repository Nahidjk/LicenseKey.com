<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>License Page</title>
    <script>
        function showLicenseKey() {
            // Fetch the license key from the server
            fetch('generate_license.php')
                .then(response => response.text())
                .then(licenseKey => {
                    alert('License key: ' + licenseKey);
                })
                .catch(error => console.error('Error fetching license key:', error));
        }
    </script>
</head>
<body>
    <h1>Welcome to the License Page</h1>
    <button onclick="showLicenseKey()">Show License Key</button>
</body>
</html>
