<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ page_title($title ?? "") }}</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  {{-- materialise styles --}}
  <link rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.min.css') }}">
  
  {{-- my styles --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  {{-- font awesome --}}
  <link rel="stylesheet" href="{{ asset('libs/font_awesome/css/font-awesome.min.css') }}">

</head>
<body>
  
    @include('layouts.partials._nav')
    @yield('content')
	
    @include('layouts.partials._footer')



  <script src="{{ asset('libs/jQuery/jquery-3.2.1.js') }}"></script>
  <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
  
  @include('flashy::message')
</body>
</html>