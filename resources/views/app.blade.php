<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel='stylesheet' href="/css/bootstrap.min.css" type='text/css' media='all'/>

        <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    </head>
    <body>
        <div class="container">
            <section class="content">
                <div class="pad group">
                   @yield('content')
                </div>
            </section>
        </div>
    </body>
</html>
