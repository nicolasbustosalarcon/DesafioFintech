<!--<!DOCTYPE html>
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
            <a href="{{URL::action('PostsController@show',[$a->rut])}}">
            {{ $a->rut }}
          </a>
            {{ $a->fullName }}
          </div>
      </div>
      @endforeach
  </div>


</body>
</html>
-->

@extends ('layouts.app')

@section ('titulo', 'Usuarios')

@section('content')
  <div class="row">
      <table class="table table-striped">
        <thead>
          <th>Rut</th>
          <th>Nombre</th>
        </thead>
        <tbody>
          @foreach($all as $a)
            <tr>
                <td><a href="{{route('usuario.show',$a->rut)}} ">{{ $a->rut }}</a></td>
                <td>{{ $a->fullName }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      
  </div>
@endsection