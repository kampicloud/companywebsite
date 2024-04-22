<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Use a clean, simple font */
            text-align: center; /* Center align the text */
            margin-top: 20%; /* Position text roughly in the middle of the page */
        }
    </style>
</head>
<body>
    <div id="notice">
        <p>Preparing your experience...</p>
    </div>
    <script>
        // Function to detect the screen width and redirect
        function checkDeviceSize() {
            var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            // Display a notice to users about the redirection
            document.getElementById('notice').innerHTML = '<p>Please wait while we direct you to the appropriate version of our site.</p>';

            // Assuming 768px as a threshold for mobile devices
            if (width <= 768) {
                // Redirect to the mobile-specific page after a brief delay
                setTimeout(function() {
                    window.location.href = "index-m.html";
                }, 500); // Delay in milliseconds (2000ms = 2 seconds)
            } else {
                // Redirect to the desktop-specific page after a brief delay
                setTimeout(function() {
                    window.location.href = "index-d.html";
                }, 500); // Delay in milliseconds
            }
        }

        // Call the function on page load
        checkDeviceSize();
    </script>
</body>
</html>
