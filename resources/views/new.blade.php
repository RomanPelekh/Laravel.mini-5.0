<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1>Форма</h1>

  @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
        @endforeach

    </ul>


</div>


      @endif



 <!--   <form method="post"  action="/new/check"> -->
    @if (isset($users))
       <form method="post"  action="{{ route('check',$users->id) }}">
     @else
       <form method="post"  action="{{ route('check',0) }}">
    @endif

    @csrf
        @if (isset($users))
    <input type="text" name="name" id="name" value="{{ $users->name }}" placeholder="Введіть імя" class="form-control"><br>
    <input type="email" name="email" id="email" value="{{ $users->email }}" placeholder="Введіть email" class="form-control"><br>
    <input type="text" name="phone" id="phone" value="{{ $users->phone }}" placeholder="Введіть телефон" class="form-control"><br>
         @else
    <input type="text" name="name" id="name" placeholder="Введіть імя" class="form-control"><br>
    <input type="email" name="email" id="email" placeholder="Введіть email" class="form-control"><br>
    <input type="text" name="phone" id="phone" placeholder="Введіть телефон" class="form-control"><br>

        @endif
    <button type="submit" class="btn btn-success">Додати в базу</button>




</form>

</body>
</html>
