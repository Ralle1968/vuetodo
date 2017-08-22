<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="shortcut icon" href="{{ asset('img/favicon_todolist.ico') }}">
        <title>Ralfs VueToDo-List</title>
        <!-- CSRF Stuff -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
   </head>
   <body>
        <div id='app'>
            <div class="row">
                <my-navbar></my-navbar>
                <router-link to="/">Home</router-link>
                <router-link to="/form">Create</router-link>
                <router-view></router-view>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
