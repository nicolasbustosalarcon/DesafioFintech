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
    <h1>Usuarios</h1>
      @foreach($all as $a)
      <div class="panel panel-default">
        <div class="panel-body">
          {{ $a->rut }}
          {{ $a->fullName }}
        </div>
      </div>
      @endforeach
  </div>

</body>
</html>