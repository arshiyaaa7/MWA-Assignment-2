<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Gandharva</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .container h1 {
            text-align: center;
            color: #5e4d3a;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #5e4d3a;
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #4a3a2b;
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #5e4d3a;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <img src="JSPM-logo.jpeg" alt="College Logo" class="college-logo">
            <div class="header-text">
                <h1>JSPM's Rajarshi Shahu College of Engineering</h1>
                <h2>
                    An Empowered Autonomous Institute Affiliated to Savitribai Phule Pune University, Approved by AICTE<br>
                    Accredited by NBA (UG Programs), Accredited by NAAC With "A" Grade
                </h2>
            </div>
            <img src="JSPM-logo-2.jpg" alt="Founder Logo" class="founder-logo">
        </div>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="Index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Get in Touch</h1>
        <p>If you have any questions or need further information about Gandharva, feel free to reach out to us!</p>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Full Name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
            
            <input type="submit" value="Send Message">
        </form>
    </div>

    <footer>
        &copy; 2025 JSPM's Rajarshi Shahu College of Engineering. All Rights Reserved.
    </footer>
</body>
</html>
