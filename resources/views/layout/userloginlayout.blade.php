<html>
    <head>
        <title>@yield('title')</title>
        <link href={{asset('/css/Main.css')}} rel="stylesheet"/>
        <script src={{URL::asset('js/jquery-1.10.2.min.js')}}></script>
        <script src={{URL::asset('js/JQUERY%20Main.js')}}></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        @yield('content')
    </body>
</html>