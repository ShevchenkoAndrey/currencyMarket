<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    {!! Html::style('css/app.css') !!}
    {!! Html::script('js/custom.js') !!}

</head>

<body>
<div class="container">

    <div class="content">
        @yield('content')
    </div>

</div>
</body>
</html>
