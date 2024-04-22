<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Barangay Ili Sur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 20%;
        }
        #loadingScreen {
            display: block;
            margin-top: 20vh;
        }
    </style>
</head>
<body>
    <!-- Replace 'loading.gif' with the path to your actual loading GIF -->
    <div id="loadingScreen">
        <img src="loading.gif" alt="Loading..." width="50px" height="50px"/>
    </div>
    <script>
        function checkDeviceSize() {
            var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            // Optionally, update text or add more content to inform the user
            var loadingMessage = document.getElementById('loadingScreen');

            // Delay redirection for a better user experience
            setTimeout(function() {
                if (screenWidth <= 768) {
                    // Redirect to the mobile-specific page
                    window.location.href = "index-m.html";
                } else {
                    // Redirect to the desktop-specific page
                    window.location.href = "index-d.html";
                }
            }, 500); // 2000 milliseconds delay for the loading message
        }

        // Execute the screen check function when the page loads
        window.onload = checkDeviceSize;
    </script>
</body>
</html>
