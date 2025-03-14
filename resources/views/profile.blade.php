<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Moataz Ya Ghali</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #fff;
        }

        .navbar {
            background: #111;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar ul {
            list-style-type: none;
        }

        .navbar ul li {
            display: inline;
            margin-right: 20px;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: #ff6347;
        }

        .profile-container {
            padding: 50px 20px;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            margin-top: 30px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(255, 99, 71, 0.8);
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .profile-header h1 {
            font-size: 40px;
            margin-bottom: 20px;
            color: #ff6347;
            text-transform: uppercase;
        }

        .profile-header span {
            font-size: 42px;
            font-weight: bold;
            color: #ffd700;
        }

        .profile-image {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            border: 5px solid #ff6347;
            margin: 30px;
            box-shadow: 0 0 25px rgba(255, 99, 71, 0.8);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.1);
            box-shadow: 0 0 50px rgba(255, 99, 71, 1);
        }

        .profile-content h2 {
            font-size: 30px;
            margin-top: 20px;
            color: #ff6347;
            transition: color 0.3s ease;
        }

        .profile-content h2:hover {
            color: #ffd700;
        }

        .profile-content p {
            font-size: 18px;
            margin-top: 20px;
            color: #ccc;
            line-height: 1.5;
            transition: color 0.3s ease;
        }

        .profile-content p:hover {
            color: #ff6347;
        }

        .profile-footer {
            margin-top: 40px;
            color: #bbb;
        }

        .profile-footer p {
            font-size: 14px;
            color: #ccc;
        }

        .profile-footer p:hover {
            color: #ff6347;
            cursor: pointer;
        }

        .profile-footer a {
            color: #ff6347;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .profile-footer a:hover {
            color: #ffd700;
        }

        .projects-container {
            margin-top: 50px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
        }

        .projects-container h3 {
            font-size: 24px;
            color: #ff6347;
        }

        .projects-container ul {
            list-style-type: none;
            padding: 0;
        }

        .projects-container ul li {
            font-size: 18px;
            color: #ccc;
            margin: 10px 0;
        }

        .projects-container ul li a {
            text-decoration: none;
            color: #ff6347;
            font-weight: bold;
        }

        .projects-container ul li a:hover {
            color: #ffd700;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="/">Profile</a></li>
            <li><a href="/about">About Me</a></li>
            <li><a href="/contact">Contact Us</a></li>
        </ul>
    </nav>

    <div class="profile-container">
        <div class="profile-header">
            <h1>Welcome to the profile of <span>Moataz Ya Ghali</span></h1>
            <p>Your personalized space! Learn more about me here.</p>
        </div>
        
        <div class="profile-content">
            <img src="{{ asset('images/finaly.png') }}" alt="Moataz Ya Ghali" class="profile-image">
            <h2>About Me</h2>
            <p>Hello! I'm Moataz, a passionate backend developer. I specialize in SQL, Java, Python, and data analysis. I enjoy working on challenging and innovative projects, and I am always looking to expand my knowledge in the world of programming.</p>
        </div>

        <div class="projects-container">
            <h3>My Projects</h3>
            <ul>
                <li><a href="#">Project 1: A Loan Management System</a></li>
                <li><a href="#">Project 2: Sports Field Booking App</a></li>
                <li><a href="#">Project 3: Clinic Consultation System</a></li>
            </ul>
        </div>

        <div class="profile-footer">
            <p>If you want to connect, feel free to <a href="/contact">contact me</a>.</p>
            <p>&copy; 2025 Moataz Abdulrahim Kamal Al-Mallah. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
