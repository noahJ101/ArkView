@extends('layouts.app')

@section('style')

@endsection


@section('content')
    
 <!-- Header Start -->
 {{-- <div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 400px"
    >
      <h3 class="display-3 font-weight-bold text-white">About Us</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">About Us</p>
      </div>
    </div>
  </div> --}}
  <!-- Header End -->

  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img
            class="img-fluid rounded mb-5 mb-lg-0"
            src="{{ url('assets/img/news-5.jpg') }}"
            alt=""
          />
        </div>
        <div class="col-lg-7">
          <p class="section-title pr-5">
            <span class="pr-2">Learn About Us</span>
          </p>
          <h1 class="mb-4">Welcome to Arkviews</h1>
          <p>
            At Arkviews, we are dedicated to providing insightful, engaging, and informative content that spans a wide range of topics. Our mission is to be a trusted source for readers seeking well-researched articles, expert opinions, and fresh perspectives on the issues that matter most.
          </p>

          <h3 class="mb-4">Our Story</h3>
          <p>
            Founded in 2024, Arkviews started as a small blog with a big vision. Our goal was simple: to create a platform where curious minds could find valuable information and inspiring stories. Over the years, we have grown into a vibrant community of writers, thinkers, and readers, all united by a shared passion for knowledge and discovery.
          </p>

          <h3 class="mb-4">What we Cover</h3>

          <p>
            Arkviews is your go-to destination for diverse content. Whether you're interested in entertainment, sports, health and fitness, technology, politics, lifestyle, business, or culture, we have something for everyone. Our team of skilled writers and editors work tirelessly to bring you the latest trends, in-depth analysis, and thought-provoking commentary.
          </p>

          <h3 class="mb-4">Our Values</h3>

          <p>
            At Arkviews, we believe in the power of storytelling and the importance of integrity. Our core values guide everything we do:
          </p>

          <div class="row pt-2 pb-4">
            <div class="col-6 col-md-4">
              <img class="img-fluid rounded" src="{{ url('assets/img/logo-png.png') }}" alt="" />
            </div>
            <div class="col-6 col-md-8">
              <ul class="list-inline m-0">
                <li class="py-2 border-top border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i><span>Quality:</span> We are committed to producing high-quality content that is accurate, well-researched, and engaging.
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Integrity: Honesty and transparency are at the heart of our work. We strive to provide reliable information and respect our readers' trust.
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Innovation: We embrace change and innovation, constantly evolving to meet the needs of our audience and the ever-changing digital landscape.
                </li>
                <li class="py-2 border-bottom">
                    <i class="fa fa-check text-primary mr-3"></i>Community: Our readers are at the center of everything we do. We value your feedback, encourage your participation, and aim to create a welcoming and inclusive environment.
                  </li>
              </ul>
            </div>
          </div>
          {{-- <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  
    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
          <div class="row">
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Technology</h4>
                  <p class="m-0">
                    Stay updated with the latest advancements in tech, from innovative gadgets to groundbreaking scientific discoveries.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Health and Fitness</h4>
                  <p class="m-0">
                    Explore articles on wellness, fitness, nutrition, and mental health to help you lead a balanced and healthy lifestyle.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Lifestyle</h4>
                  <p class="m-0">
                    Find inspiration for your daily life with tips on travel, fashion, home decor, and more.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Business</h4>
                  <p class="m-0">
                    Gain insights into the world of business, entrepreneurship, and finance with expert advice and success stories.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Culture</h4>
                  <p class="m-0">
                    Delve into the rich tapestry of global cultures, arts, and entertainment, celebrating diversity and creativity.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
              <div
                class="d-flex bg-light shadow-sm border-top rounded mb-4"
                style="padding: 30px"
              >
                <i
                  class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
                ></i>
                <div class="pl-4">
                  <h4>Sports</h4>
                  <p class="m-0">
                    Get the latest news and updates on Nigerian and international sports, including football, athletics, basketball and more.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Facilities Start -->
  
      <!-- Team Start -->
      <div class="container-fluid pt-5">
        <div class="container">
          <div class="text-center pb-2">
            <p class="section-title px-5">
              <span class="px-2">Our Team</span>
            </p>
            <h1 class="mb-4">Meet the Team</h1>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="{{ url('assets/img/james.jpg') }}" alt="" />
                
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                <a
         class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
         style="width: 38px; height: 38px"
         href="https://instagram.com/ark.view" target="_blank"
         ><i class="fab fa-instagram"></i
       ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="https://twitter.com/arkviews_" target="_blank"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="https://www.facebook.com/profile.php?id=61559887131054&mibextid=ZbWKwL" target="_blank"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="www.linkedin.com/noah-james-obekpa" target="_blank"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              {{-- <h4>Julia Smith</h4>
              <i>Music Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="img/team-2.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Jhon Doe</h4>
              <i>Language Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Mollie Ross</h4>
              <i>Dance Teacher</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div
                class="position-relative overflow-hidden mb-4"
                style="border-radius: 100%"
              >
                <img class="img-fluid w-100" src="img/team-4.jpg" alt="" />
                <div
                  class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
                >
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center mr-2 px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a
                    class="btn btn-outline-light text-center px-0"
                    style="width: 38px; height: 38px"
                    href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <h4>Donald John</h4>
              <i>Art Teacher</i>
            </div>
          </div> --}}
          <p>
            [Founder/Editor-in-Chief]: With a vision to create a platform for meaningful discourse, <a href="{{ url('noahjamesobekpa') }}">Noah James</a> founded ArkViews to connect readers with quality content and insightful discussions.
          </p>
        </div>
      </div>
      <!-- Team End -->

 @endsection

@section('script')

@endsection
   

    