<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Coding Event</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            width: 80%;
            max-width: 600px;
            text-align: center;
            margin: 20px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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

    <section id="registration" class="form-container">
        <h2>Event Registration Form</h2>
        <form id="registrationForm" method="POST" action="process_registration.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="event">Event:</label>
            <select id="event" name="event">
                <option value="Sports">Annual Sports Meet</option>
                <option value="Coding Competition">Coding Competition</option>
                <option value="Hackathon">Hackathon</option>
            </select><br><br>

            <input type="submit" value="Register">
        </form>
    </section>

    <?php
    include 'db_connect.php'; // Connect to the database

    // Fetch registered users
    $sql = "SELECT name, email, phone, event, registered_at FROM registrations ORDER BY registered_at DESC";
    $result = $conn->query($sql);
    ?>

    <section id="registered-users" class="form-container">
        <h2>Registered Participants</h2>
        <table border="3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Event</th>
                    <th>Registered At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['event']}</td>
                            <td>{$row['registered_at']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' style='text-align:center;'>No Registrations Yet</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>
