@extends('layouts.app')

@section('style')
<!-- Add any additional CSS styles specific to this page here -->
@endsection

@section('content')
    
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Portfolio</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Portfolio</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Me Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center pb-2">
            <h1 class="mb-4">About Me</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-4">
                <p>Hello! I'm John Doe, a software developer with a passion for building web applications. I specialize in PHP, Laravel, JavaScript, and modern web technologies. Welcome to my portfolio where you can find details about my skills, projects, and how to contact me.</p>
            </div>
        </div>
    </div>
</div>
<!-- About Me End -->

<!-- Projects Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">My Projects</span>
            </p>
            <h1 class="mb-4">Featured Projects</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active" data-filter="*">All</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".web">Web Development</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".mobile">Mobile Development</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".other">Other</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item web">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid w-100" src="img/project-1.jpg" alt="Project 1" />
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/project-1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                        </a>
                    </div>
                </div>
                <h4 class="text-center">Project 1</h4>
                <p class="text-center">Description of Project 1</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item mobile">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid w-100" src="img/project-2.jpg" alt="Project 2" />
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/project-2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                        </a>
                    </div>
                </div>
                <h4 class="text-center">Project 2</h4>
                <p class="text-center">Description of Project 2</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item other">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid w-100" src="img/project-3.jpg" alt="Project 3" />
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/project-3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                        </a>
                    </div>
                </div>
                <h4 class="text-center">Project 3</h4>
                <p class="text-center">Description of Project 3</p>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </div>
</div>
<!-- Projects End -->

<!-- Contact Me Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center pb-2">
            <h1 class="mb-4">Contact Me</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-4">
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Me End -->

@endsection

@section('script')
<!-- Add any additional JS scripts specific to this page here -->
@endsection
