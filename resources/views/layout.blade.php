<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('title','Blog')
    </title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <ul class= "nav">
        <li><a class="{{request()->routeIs('home')?'active':''}}"  href="{{ route('home')}}">Home</a></li>
        <li><a class="{{request()->routeIs('about')?'active':''}}"  href="{{ route('about')}}">About</a></li>
        <li><a class="{{request()->routeIs('posts.create')?'active':''}}"  href="{{ route('posts.create')}}">Create Post</a></li>
    </ul>

    @includeWhen($errors->any(), '_error')
        
    @if(session('success'))
    <div class="flash-success">
        {{ session('success') }}
    </div>
    @endif


    <div class="main">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>