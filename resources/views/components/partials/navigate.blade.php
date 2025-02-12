<head>
    <link href="{{ asset('css/navegacion.css') }}" rel="stylesheet">
</head>


<div class="container text-center navegacion">
    <div class="row">
      <div class="col"><li><a href="{{ route('home')}} ">Home</a></li></div>
      <div class="col"><li><a href="{{ route('posts.index') }}">Blog</a></li></div>
      <div class="col"><li><a href="{{ route('about') }}">Nosotros</a></li></div>
      <div class="col"><li><a href="{{ route('contact') }}">Contacto</a></li></div>
</div>
