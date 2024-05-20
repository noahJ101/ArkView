@extends('layouts.app')

@section('style')

@endsection


@section('content')

 <!-- Header Start -->
 
  <!-- Header End -->

  <!-- Contact Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Get In Touch</span>
        </p>
        <h1 class="mb-4">Contact Us For Any Query</h1>
      </div>
      <div class="row">
        <div class="col-lg-7 mb-5">
          <div class="contact-form">
            <div id="success"></div>
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                  required="required"
                  data-validation-required-message="Please enter your name"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="control-group">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Your Email"
                  required="required"
                  data-validation-required-message="Please enter your email"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="control-group">
                <input
                  type="text"
                  class="form-control"
                  id="subject"
                  placeholder="Subject"
                  required="required"
                  data-validation-required-message="Please enter a subject"
                />
                <p class="help-block text-danger"></p>
              </div>
              <div class="control-group">
                <textarea
                  class="form-control"
                  rows="6"
                  id="message"
                  placeholder="Message"
                  required="required"
                  data-validation-required-message="Please enter your message"
                ></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div>
                <button
                  class="btn btn-primary py-2 px-4"
                  type="submit"
                  id="sendMessageButton"
                >
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 mb-5">
          <p>
            Have questions, suggestions, or just want to say hello? We'd love to hear from you! Reach out to us at <info@arkviews class="com"></info@arkviews>. Your feedback helps us improve and serve you better.
          </p>
          <div class="d-flex">
            <i
              class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
              style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
              <h5>Address</h5>
              <p>Casdastral Zone, F.C.T Abuja, Nigeria.</p>
            </div>
          </div>
          <div class="d-flex">
            <i
              class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
              style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
              <h5>Email</h5>
              <p>info@arkviews.com</p>
              <p>arkviewsinsight@gmail.com</p>
            </div>
          </div>
          <div class="d-flex">
            <i
              class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
              style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
              <h5>Phone</h5>
              <p>+2348135947755</p>
            </div>
          </div>
          <div class="d-flex">
            <i
              class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
              style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
              <h5>Opening Hours</h5>
              <strong>Monday - Saturday:</strong>
              <p class="m-0">08:00 AM - 05:00 PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

 @endsection

@section('script')

@endsection
   

    