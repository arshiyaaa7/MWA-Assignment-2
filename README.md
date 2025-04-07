# MWA-Assignment-2 🚀

## Project Overview

MWA-Assignment-2 is a web-based event registration application developed using PHP, HTML, CSS, and MySQL. The project is designed for managing event registrations for JSPM's Rajarshi Shahu College of Engineering. It provides an easy-to-use interface for students to register for various events and allows the admin to view registered participants.

### Features 🌟

- Event Registration Form with fields: Name, Email, Phone, and Event Type.
- Display of registered participants in a structured table.
- PHP-based backend for handling form submissions and database interactions.
- MySQL database for storing registration details.
- Responsive UI using HTML and CSS.

## Project Structure 📂

```
MWA-Assignment-2/
├── JSPM-logo-2.jpg          # Logo Image
├── JSPM-logo.jpeg           # College Logo
├── Technical competitions.jpg  # Event Image
├── contact_us.php           # Contact Page
├── db_connect.php           # Database Connection Script
├── gandharva.jpeg           # Event Poster
├── index.php                # Homepage
├── process_registration.php # Script for handling form submission
├── register.php             # Registration Form
├── schedule.php             # Event Schedule
├── sports.jpg               # Sports Event Image
├── style.css                # Styling for the Website
└── README.md                # Project Documentation
```

## Installation and Setup 🛠️

1. Clone the repository:
   ```
   git clone https://github.com/arshiyaa7/MWA-Assignment-2.git
   ```
2. Move the project folder to the XAMPP htdocs directory:
   ```
   mv MWA-Assignment-2/ /xampp/htdocs/
   ```
3. Start XAMPP and activate Apache and MySQL.
  
4. Import the database:
   - Open phpMyAdmin and create a database named `gandharva`.
   - Make sure the database has a table called `registrations` with fields like `id`, `name`, `email`, `phone`, `event`, and `registered_at`.

## How My Database Looks 📊
(Add a screenshot of your database structure here)

## Usage 💻

1. Access the application:
   ```
   http://localhost/MWA-Assignment-2/index.php
   ```
2. Navigate to the **Register** page to sign up for an event.
3. View registered participants on the same page.

## Troubleshooting 🐞

- If the registration form does not work, ensure that:
  - MySQL is running on port 3307 (update db_connect.php if needed).
  - The database credentials in `db_connect.php` are correct.

## Add Images 📷
Home Page of the website :

![Screenshot 2025-04-07 173729](https://github.com/user-attachments/assets/2f91f7f1-2a3d-4b63-884f-d7efa296b353)
