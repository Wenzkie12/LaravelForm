<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        /* CSS for background gradient */
        body {
            background: #36393f;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* CSS for paragraph styling */
        #welcome-paragraph {
            font-family: "Elephant", sans-serif;
            text-align: center; /* Center align the text */
            max-width: 100%; /* Ensure the text doesn't exceed the screen width */
            font-size: 8vw; /* Adjust the font size dynamically based on viewport width */
            color: white; /* Text color */
            margin-top: 10%; /* Adjust vertical position */
        }

        /* CSS for navbar responsiveness and hover effects */
        .navbar-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.2); /* Background color for the navbar with opacity */
            transition: max-height 0.3s ease-out; /* Transition for sliding effect */
        }

        .navbar-list li {
            float: left;
        }

        .navbar-list li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s; /* Transition for hover effect */
        }

        .navbar-list li a:hover {
            background-color: rgba(255, 255, 255, 0.3); /* Background color on hover with opacity */
        }

        /* Responsive styles */
        @media screen and (max-width: 600px) {
            .navbar-list {
                max-height: 0; /* Initially hide the navigation items */
            }

            .navbar-list.active {
                max-height: 1000px; /* Show the navigation items when active */
            }

            .navbar-list li {
                float: none;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul class="navbar-list" id="navbar">
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('registration') }}">Registration</a></li>
            <!-- You can add more navigation items as needed -->
        </ul>
    </nav>

    <p id="welcome-paragraph">Welcome to Lowend's Website</p>
    
    <script>
        // JavaScript to toggle the active class for the navbar
        document.getElementById('navbar').addEventListener('click', function() {
            this.classList.toggle('active');
        });
    </script>
</body>
</html>
