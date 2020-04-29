<!doctype html>
<html>
<head>
   @include('includes.head')
   <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ ('assets/images/favicon-32x32.png') }}">
</head>
<body  style="margin: 0px;font-family: sans-serif;color:#FFF;">
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=1544987315668784&autoLogAppEvents=1"></script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="">
   <header class="">
       @include('includes.header')
       @include('includes.menu')
   </header>
   <div id="main" class="">
           @yield('content')
   </div>
   <footer class="">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>