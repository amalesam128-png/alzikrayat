<?php
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alzikrayat Project Report</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; color: #333; }
        h1 { text-align: center; color: #1a252f; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        h2 { color: #2980b9; margin-top: 25px; border-bottom: 1px solid #ddd; padding-bottom: 5px; }
        .meta { text-align: center; font-style: italic; color: #7f8c8d; margin-bottom: 30px; }
        ul { margin-bottom: 15px; }
    </style>
</head>
<body>
    <h1>Alzikrayat Project Report</h1>
    <div class="meta">
        <p><strong>Student Name:</strong> Amal Esam Abdelgadir | <strong>Course:</strong> Advanced Web Technologies</p>
        <p>Sudan University of Science & Technology (SUST)</p>
    </div>

    <h2>1. Project Overview</h2>
    <p>Alzikrayat is a dynamic photo-sharing web application engineered to generate dynamic web pages directly from relational database entities. Built entirely without third-party frameworks, it demonstrates core web application architectures and server-side request management.</p>

    <h2>2. Architecture & Project Structure</h2>
    <p>The system follows a strict 3-Tier Physical Architecture coexisting with a custom hand-written Model-View-Controller (MVC) logical pattern:</p>
    <ul>
        <li><strong>Presentation Tier (Views):</strong> HTML5 templates with Bootstrap 5 (RTL) for dynamic rendering.</li>
        <li><strong>Application Tier (Controllers & Router):</strong> Custom regex-based routing dispatcher and request orchestration.</li>
        <li><strong>Data Tier (Models & Database):</strong> Persistent data storage via SQLite database queries using PDO.</li>
    </ul>

    <h2>3. Database Design</h2>
    <p>The SQLite relational database consists of normalized tables linked with primary and foreign key constraints:</p>
    <ul>
        <li><strong>Users:</strong> Stores user profiles, authentication credentials, and encrypted passwords.</li>
        <li><strong>Photos:</strong> Contains image metadata, upload file paths, and foreign key references to users.</li>
        <li><strong>Comments:</strong> Stores user comments associated with uploaded photo records.</li>
    </ul>

    <h2>4. Main Features</h2>
    <ul>
        <li>Session-based user registration, authentication, and state management.</li>
        <li>Dynamic user gallery navigation and profile view pages.</li>
        <li>Manual parameter mapping via regular expressions in the core Router engine.</li>
    </ul>

    <h2>5. Novelty / Advanced Features</h2>
    <p>The solution features a lightweight, standalone regex routing engine implemented from scratch without framework dependencies, maintaining optimal deployment compatibility for Android Termux environments and embedded Linux systems.</p>

    <h2>6. Conclusion</h2>
    <p>Alzikrayat successfully achieves all core learning requirements of Advanced Web Technologies, demonstrating a clear separation of concerns, secure data interaction, and robust MVC architectural implementation.</p>
</body>
</html>
';

file_put_contents('/data/data/com.termux/files/home/alzikrayat/Project_Report.html', $html);
echo "HTML Report generated successfully.\n";
