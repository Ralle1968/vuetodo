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

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
  <body>
    <div id='app'>
      <div class="row">
        <my-navbar></my-navbar>
        <router-view></router-view>
      </div>
    </div>
      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
