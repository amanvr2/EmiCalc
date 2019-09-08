<!DOCTYPE html>
<html>
    <head>
        <title> Emi Calc</title>
        <link rel = "stylesheet" href= "/css/app.css"/>
        <script src="https://kit.fontawesome.com/047892e3f1.js"></script>
    </head>
    <body>
        @include('include.navbar')
        <div class="container">
        <div class="jumbotron">
        
          @yield('calc')
        </div>
        </div>

    </body>
</html>