<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noah James Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .container { width: 80%; margin: auto; }
        header, section { padding: 20px 0; }
        header { background: #333; color: #fff; }
        header h1 { margin: 0; }
        nav ul { list-style: none; padding: 0; }
        nav ul li { display: inline; margin-right: 10px; }
        nav ul li a { color: #fff; text-decoration: none; }
        section { border-bottom: 1px solid #ccc; }
        footer { text-align: center; padding: 20px 0; background: #333; color: #fff; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>John Doe</h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="about" class="container">
        <h2>About Me</h2>
        <p>Hello! I'm John Doe, a software developer with a passion for building web applications. I specialize in PHP, Laravel, JavaScript, and modern web technologies.</p>
    </section>
    <section id="projects" class="container">
        <h2>Projects</h2>
        <ul>
            <li>Project 1: <a href="#">Link to project 1</a></li>
            <li>Project 2: <a href="#">Link to project 2</a></li>
            <li>Project 3: <a href="#">Link to project 3</a></li>
        </ul>
    </section>
    <section id="contact" class="container">
        <h2>Contact Me</h2>
        <form action="#" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <button type="submit">Send</button>
        </form>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 John Doe. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>