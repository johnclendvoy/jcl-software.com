<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

		@yield('css')

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    @yield('content')

    @yield('js')

</html>
