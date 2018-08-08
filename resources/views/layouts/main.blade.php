<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  href={{asset("css/app.css")}} rel="stylesheet">
    <title>{{config('app.name','TalentApp')}}</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
        <body>
            @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>
        
        </body>
</html>
