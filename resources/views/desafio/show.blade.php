<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/app.css">
  <title>
    Desafío Fintech
  </title>
</head>
<body>
  <div class="container">
    <h1>Productos del RUT </h1>
        <div class="panel panel-default">
          <div class="panel-body">
           	{{$post->id}}
           	{{$post->amount}}
			{{$post->type}}
           	{{$post->status}}
           	{{$post->limitAmount}}

          </div>
      </div>
  </div>

</body>
</html>