# Alzikrayat - Photo Sharing Application

## Student Information
- **Name:** Amal Esam Abdelgadir
- **Major:** Information Technology
- **Semester:** Semester 7

## Description
Alzikrayat is a dynamic web application for sharing photos and memories.

The project is developed using native PHP without external backend frameworks. It follows a custom MVC architecture that separates Models, Views, Controllers, and the Router.

The application demonstrates user registration and authentication, session management, profile viewing, photo management, comments, database interaction, and dynamic web page generation.

## Main Features
- User registration
- User login and logout
- Session-based authentication
- User profiles
- Displaying users
- Uploading photos
- Viewing photo details
- Adding comments to photos
- Database interaction
- Arabic RTL interface

## Technologies Used
- **Programming Language:** Native PHP
- **Database:** MySQL
- **Database Access:** PDO
- **Architecture:** Custom MVC Architecture
- **Frontend:** HTML, PHP Views, Bootstrap 5 RTL
- **Server:** PHP Built-in Development Server

## Project Structure
```text
alzikrayat/
├── config/
│   └── database.php
├── controllers/
│   ├── AuthController.php
│   └── PhotoController.php
├── core/
│   └── Router.php
├── models/
│   ├── User.php
│   ├── Photo.php
│   └── Comment.php
├── views/
├── public/
│   ├── index.php
│   └── test.php
└── README.md
