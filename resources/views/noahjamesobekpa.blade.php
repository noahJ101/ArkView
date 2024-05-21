<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Other head content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of a PHP Laravel Software Developer">
    <meta name="keywords" content="Laravel, PHP, Software Developer, Portfolio">
    <meta name="author" content="Your Name">
    <title>Portfolio - Noah James Obekpa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand img {
            height: 50px;
        }
        .project-img {
            height: 200px;
            object-fit: cover;
        }

        .social-btn {
    width: 38px;
    height: 38px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 8px;
}

.social-btn i {
    font-size: 18px;
}

.social-container {
    margin-top: 16px;
}
    </style>
</head>
<body>
    {{-- <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav> --}}
    <!-- Navbar End -->

    <!-- About Me Section Start -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                   <a href="{{ url('') }}"> <img src="{{ url('img/logo-png.png') }}" alt="Profile Picture" class="img-fluid rounded-circle"></a>
                </div>
                <div class="col-lg-8">
                    <h2>About Me</h2>
                    <p>Hello! I'm a PHP Laravel software developer with over 3 years of experience in building dynamic and responsive web applications. My expertise lies in developing robust solutions using Laravel for backend and Bootstrap for the frontend.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Me Section End -->

    <!-- Projects Section Start -->
    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Projects</h2>
            <div class="row">
                <!-- Project 1: Blog -->

                <!-- Project 1: Property Management System -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/phomepage.png') }}" class="card-img-top project-img" alt="Property Management Project">
                        <div class="card-body">
                            <h5 class="card-title">Property Management System</h5>
                            <p class="card-text">The Property Management System is a comprehensive web application designed to streamline and simplify the management of rental properties. It includes features like property listing, tenant management, and rent tracking. 
                                Built using Laravel, a robust PHP framework, and Bootstrap for modern and responsive design, this system provides an intuitive interface for both property managers and tenants. The backend is powered by a MySQL database, ensuring efficient and reliable data management.</p>
                            <a href="https://property.arkviews.com/" target="_blank" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{url('img/ahomepage.png')}}" class="card-img-top project-img" alt="Blog Project">
                        <div class="card-body">
                            <h5 class="card-title">Blog</h5>
                            <p class="card-text">The Multi-User Blog Application is a robust and feature-rich platform designed to facilitate content creation and sharing among multiple users. 
                                Built using Laravel, a powerful PHP framework, and Bootstrap for responsive and modern design, this application provides a seamless and engaging user experience.
                                 The backend is powered by a MySQL database, ensuring efficient data management and retrieval.
                                 It includes functionalities like user authentication, post management, and comments.</p>
                            <a href="{{ url('') }}" target="_blank" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Project 2: E-commerce Website -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{url('img/homepage.png')}}" class="card-img-top project-img" alt="E-commerce Project">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Website</h5>
                            <p class="card-text">The E-Commerce Website is a comprehensive online shopping platform designed to provide a seamless and engaging shopping experience for users. It features a product catalog, shopping cart, checkout system, and order management.
                                Built using Laravel, a robust PHP framework, and Bootstrap for modern and responsive design, this application ensures a smooth and efficient user interface. I crafted a sleek and intuitive user interface using HTML, CSS, and JavaScript.
                                The backend is powered by a MySQL database, guaranteeing reliable data management and quick access.
                            </p>
                            <a href="https://store.arkviews.com/" target="_blank"  class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Projects Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center">Contact Me</h2>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Noah James Obekpa. All rights reserved.</p>
            <div class="d-flex justify-content-start social-container">
                <a class="btn btn-outline-primary rounded-circle social-btn" href="https://twitter.com/arkviews_" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-outline-primary rounded-circle social-btn" href="https://www.facebook.com/profile.php?id=61559887131054&mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-primary rounded-circle social-btn" href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="btn btn-outline-primary rounded-circle social-btn" href="https://instagram.com/arkviews" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
              
        </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
