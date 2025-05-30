# 🎓 University LMS (PHP + AJAX)

description: >
  A lightweight Learning Management System prototype designed for universities and educational institutions.
  This project was developed as an end-semester project under the supervision of **Sir Asif Mehmood** at NUTECH during the 5th semester.
  It replicates key LMS features like class management, announcements, messaging, and real-time updates — all powered by **PHP**, **MySQL**, and **AJAX with jQuery**.

features:
  - ✅ Teacher & Student login system
  - 📚 Class creation and assignment
  - 📢 Real-time announcements
  - ✉️ Inbox messaging module
  - 🕵️ Search functionality for past classes
  - 🎨 Bootstrap-powered UI with custom styling

tech_stack:
  frontend:
    - HTML
    - CSS
    - Bootstrap
    - jQuery
  backend:
    - PHP (Procedural)
    - MySQL
  ajax: "Used for seamless form submissions and dynamic updates"
  database: "MySQL (phpMyAdmin compatible)"

setup_instructions:
  - step: Clone the Repository
    command: git clone https://github.com/ashir138/university-lms-php-ajax.git

  - step: Import the Database
    actions:
      - Open phpMyAdmin
      - Import the provided .sql file from /db/se.sql

  - step: Configure Database
    actions:
      - Open dbcon.php
      - Set your DB credentials (host, username, password, database)

  - step: Run Locally
    actions:
      - Launch a local server (e.g., XAMPP or MAMP)
      - Access the project at: http://localhost/university-lms-php-ajax

future_scope:
  - Role-based access control (Admin, Teacher, Student)
  - File uploads and resource sharing
  - Assignment and quiz modules
  - Enhanced student profiles and analytics
  - Integration with external learning tools
