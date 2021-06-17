<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="{{ route('home') }}">Телефонний довідник</a>
</nav>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <form method="get" class="form-inline" action="{{ route('search') }}">
        <input class="form-control mr-sm-2" type="text"  id="s" name="s" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>

        <a href="/new" class="btn btn-info" role="button">Додати</a>

    </form>
</nav>
<br>



@if(count($users))
    <div class="table-responsive">
        @yield('content')

    </div>
    {{  $users->appends(['s' => request()->s])->links()  }}

@else
<p>Записів не знайдено... </p>

@endif



</body>
</html>

