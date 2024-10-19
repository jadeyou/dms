<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me - Haley Cudal</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw/gIoqFMsId1fY6ChAEi+5fjO+qQPcCluYrHu9ghaxHINaH5DpcQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .about-container {
            max-width: 900px;
            margin: 20px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .about-container:hover {
            transform: scale(1.02);
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }

        .icon {
            color: #2c3e50;
            margin-right: 10px;
        }

        .skills {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }

        .skills i {
            font-size: 40px;
            margin: 15px;
            color: #3498db;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .skills i:hover {
            color: #e67e22;
            transform: scale(1.2);
        }

        .contact-info {
            text-align: center;
            margin-top: 30px;
        }

        .contact-info a {
            color: #3498db;
            text-decoration: none;
            font-size: 1.2em;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .contact-info a:hover {
            color: #e67e22;
            transform: translateY(-5px);
        }

        .contact-info i {
            margin-right: 8px;
        }

        .profile-image {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .profile-image img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 4px solid #3498db;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease, transform 0.3s ease;
        }

        .profile-image img:hover {
            border-color: #e67e22;
            transform: rotate(360deg);
        }
    </style>
</head>
<body>

<div class="main-content" style="position: relative; top: 50px; margin-left: 200px;">
    <div class="about-container">
        <div class="profile-image">
            <img src="pictures/1.jpg" alt="Profile Image">
        </div>
        <h1>About Me</h1>
        <p><i class="fas fa-user icon"></i>Hi! I'm <strong>Haley Cudal</strong>, a passionate <strong>Web Developer</strong> with a <strong>BS in Information Technology</strong> specializing in <strong>Programming</strong>. I love turning ideas into functional, user-friendly websites and applications.</p>

        <p><i class="fas fa-laptop-code icon"></i>I specialize in both front-end and back-end development, with a keen eye for crafting responsive designs and ensuring smooth user experiences. I’m always eager to learn new technologies and bring creative solutions to every project.</p>

        <p><i class="fas fa-lightbulb icon"></i>When I’m not coding, I’m exploring the latest trends in tech, working on exciting projects, and always finding ways to improve my craft.</p>

        <div class="skills">
            <i class="fab fa-html5" title="HTML5"></i>
            <i class="fab fa-css3-alt" title="CSS3"></i>
            <i class="fab fa-js" title="JavaScript"></i>
            <i class="fab fa-php" title="PHP"></i>
            <i class="fab fa-react" title="React"></i>
        </div>

        <div class="contact-info">
            <h3>Phone:09014535625<h3>
            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:haley.cudal@example.com">haley.cudal@example.com</a></p>
            <p><i class="fab fa-linkedin"></i>LinkedIn: <a href="https://linkedin.com/in/haley-cudal" target="_blank">linkedin.com/in/haley-cudal</a></p>
            <p><i class="fab fa-github"></i>GitHub: <a href="https://github.com/haley-cudal" target="_blank">github.com/haley-cudal</a></p>
        </div>
    </div>
</div>


</body>
</html>