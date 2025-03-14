<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - معتز يا غالي</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
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

        .about-container {
            padding: 50px 20px;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            margin-top: 50px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(255, 99, 71, 0.8);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-container h1 {
            font-size: 45px;
            color: #ff6347;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .about-container p {
            font-size: 18px;
            color: #ccc;
            margin-top: 20px;
            line-height: 1.6;
        }

        .about-container p span {
            font-weight: bold;
            color: #ff6347;
        }

        .about-container .skills {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .about-container .skills div {
            margin: 0 20px;
            text-align: center;
        }

        .about-container .skills div h3 {
            font-size: 24px;
            color: #ff6347;
            margin-bottom: 10px;
        }

        .about-container .skills div p {
            font-size: 18px;
            color: #ccc;
        }

        .about-container .skills div .skill-icon {
            font-size: 50px;
            color: #ff6347;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="/">Profile</a></li>
            <li><a href="/about">About Me</a></li>
            <li><a href="/contact">Contact Me</a></li>
        </ul>
    </nav>

    <div class="about-container">
        <h1>About Me</h1>
        <p>Hello! My name is <span>Moataz Abdulrahim Kamal Al-Mallah</span>. I am a passionate <span>Backend Developer</span> with experience in <span>SQL</span>, <span>Java</span>, <span>Python</span>, and <span>Data Analysis</span>. I love tackling complex problems and creating innovative, user-friendly solutions. I am always eager to learn new technologies, and I am particularly interested in <span>Django</span> and <span>PHP</span>.</p>

        <div class="skills">
            <div>
                <div class="skill-icon">💻</div>
                <h3>Backend Development</h3>
                <p>Building efficient and scalable systems.</p>
            </div>
            <div>
                <div class="skill-icon">📊</div>
                <h3>Data Analysis</h3>
                <p>Extracting insights from data to drive decisions.</p>
            </div>
            <div>
                <div class="skill-icon">📚</div>
                <h3>Continuous Learning</h3>
                <p>Always seeking to improve and learn new technologies.</p>
            </div>
        </div>
    </div>
</body>
</html>
