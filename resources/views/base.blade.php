<!DOCTYPE html>
<html>
<head>
<title>{{$title}}</title>
<link rel="stylesheet" type="text/css" href="index.css">
@yield('css')
</head>

<body>


<nav>网站导航</nav>
@include('head')

@yield('diy')

@include('foot')
</body>

</html>