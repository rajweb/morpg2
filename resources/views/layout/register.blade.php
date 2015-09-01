<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--STYLES-->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/importer.css">
    <!--STYLES END-->
  </head>

  <body>

  <div class="container">

       @yield('content')

  </div>
    <!--SCRIPTS-->
  
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <!--SCRIPTS END-->
  </body>
</html>
