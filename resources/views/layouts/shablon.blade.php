<!DOCtype html>
    <html lang="en" >
    <head>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
        <title>My page</title>
        <!--<link rel="stylesheet" href="css/app.css">-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body style="background-color: #9e7bc1">
    <header> @yield('header')</header>

    @yield('content')

    <footer> @yield('footer')</footer>
    </body>
    </html>
