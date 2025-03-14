<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

        .contact-container {
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

        .contact-container h1 {
            font-size: 45px;
            margin-bottom: 20px;
            color: #ff6347;
            text-transform: uppercase;
            font-weight: bold;
        }

        .contact-container p {
            font-size: 18px;
            color: #ccc;
            line-height: 1.5;
        }

        .contact-container form {
            margin-top: 40px;
        }

        .contact-container input,
        .contact-container textarea {
            width: 100%;
            padding: 15px;
            margin-top: 10px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .contact-container input[type="submit"] {
            background-color: #ff6347;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .contact-container input[type="submit"]:hover {
            background-color: #ff4500;
        }

        .contact-container a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #ff6347;
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .contact-container a:hover {
            background-color: #ff4500;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="/">Profile</a></li>
            <li><a href="/about">About me</a></li>
            <li><a href="/contact">Contact Me</a></li>
        </ul>
    </nav>

    <div class="contact-container">
        <h1>Contact Me</h1>
        <p>If you have any questions or feedback, feel free to reach out to me via email or fill out the form below. I will get back to you as soon as possible!</p>
        
        <!-- Contact Form -->
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Message">
        </form>

        <p>Alternatively, you can <a href="mailto:info@example.com">email me directly</a>.</p>
    </div>
</body>
</html>
