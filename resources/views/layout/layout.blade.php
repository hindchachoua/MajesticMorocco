<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 
 
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
     <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
     <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
 
     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
 
     <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body style="overflow-x: hidden">
    @include('include.head')
    

    @yield('content')







    @include('include.footer')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', async function(event) {
        event.preventDefault(); 
        
        const formData = new FormData(form);
        const response = await fetch(form.action, {
            method: form.method,
            body: formData
        });

        if (response.ok) {
            document.getElementById('success-alert').style.display = 'block';

            form.reset();

            setTimeout(function() {
                document.getElementById('success-alert').style.display = 'none';
            }, 3000);
        }
    });
});

</script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>