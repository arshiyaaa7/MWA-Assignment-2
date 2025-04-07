# MWA-Assignment-2 🚀

## Project Overview

This is a web-based event registration application developed using PHP, HTML, CSS, and MySQL. The project is designed for managing event registrations for JSPM's Rajarshi Shahu College of Engineering. It provides an easy-to-use interface for students to register for various events and allows the admin to view registered participants.

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

## Usage 💻

1. Access the application:
   ```
   http://localhost/MWA-Assignment-2/index.php
   ```
2. Navigate to the **Register** page to sign up for an event.
3. View registered participants on the same page.

## Add Images 📷
Home Page of the website :
![Screenshot 2025-04-07 173729](https://github.com/user-attachments/assets/2f91f7f1-2a3d-4b63-884f-d7efa296b353)

To establish connection , install xampp and start mysql as follows:
![1](https://github.com/user-attachments/assets/6e7605a1-68b3-43ec-bd04-e4579d700d5c)

Go to the registration page and register yourself. The database will reflect the changes:
![2](https://github.com/user-attachments/assets/d457d878-2475-404f-bbb9-057e0459b321)

![3](https://github.com/user-attachments/assets/610f5a51-4e87-4a9a-92fe-c043b77e9fd7)

Adding more users:
![6](https://github.com/user-attachments/assets/a2362e65-afc4-4b68-849b-1022313c3676)

Now the Mysql database looks like : 
![5](https://github.com/user-attachments/assets/803d7d2a-847d-4d24-9212-0bb120127c70)

Contact us page:
![8](https://github.com/user-attachments/assets/4e57d72d-ae98-47ae-b859-7b1c097407ad)

Thank you for reading!
