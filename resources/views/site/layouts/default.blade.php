<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    @section('sidebar')
        @{{'這是側選單'}}
    @show

    @section('content')
    	{{!!'<p>test</p>' !!}}
    	{{{'<h1>hello world</h1>'}}}
    @endsection	
    <div class="container">
        @yield('content')
        @yield('test')
    </div>
    @include('site.layouts.footer')
</body>
</html>