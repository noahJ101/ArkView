<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>{{ !empty($meta_title) ? $meta_title : '' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @if(!empty($meta_keywords))
    <meta content="{{ $meta_keywords }}" name="keywords" />
    @endif
    @if(!empty($meta_description))
    <meta content="{{ $meta_description }}" name="description" />
    @endif

    <!-- Favicon -->
    <link href="{{url('img/logo-png.png')}}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="{{url('lib/flaticon/font/flaticon.css')}}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{url('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('css/style.css')}}" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     @yield('style')
  </head>

  <body>

    @include('sweetalert::alert')
    
    @include('layouts._header')

    @yield('content')

    @include('layouts._footer')
<!-- Back to Top -->
<a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('lib/easing/easing.min.js')}}"></script>
    <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Sweet Alert Confiramtion Event -->
    <script>

      function confirmation(ev) {
         ev.preventDefault();
         var urlToRedirect = ev.currentTarget.getAttribute('href');
         console.log(urlToRedirect);
         swal({
            title: "Are you sure to cancel this product",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,

         })
         .then((willCancel) => {
            if(willCancel) {

               window.location.href = urlToRedirect;

                //sweet alert confirmation
        // onclick="confirmation(event)"
            }
         });
      }
      </script>
   

    <!-- Template Javascript -->
    <script src="{{url('js/main.js')}}"></script>

    @yield('script')
  </body>
</html>
