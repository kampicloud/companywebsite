<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
</head>
<body>
    <script>
        // Function to detect the screen width and redirect
        function checkDeviceSize() {
            var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            // Assuming 768px as a threshold for mobile devices
            if (width <= 768) {
                // Redirect to the mobile-specific page
                window.location.href = "index-m.html";
            } else {
                // Redirect to the desktop-specific page
                window.location.href = "index-d.html";
            }
        }

        // Call the function on page load
        checkDeviceSize();
    </script>
</body>
</html>
