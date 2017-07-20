<html>
<head>
    <title>App Name - @yield('title')</title>

    <link rel=stylesheet type="text/css" href="/css/bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>