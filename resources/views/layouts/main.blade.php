<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    {!! Html::style('css/app.css') !!}

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

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
