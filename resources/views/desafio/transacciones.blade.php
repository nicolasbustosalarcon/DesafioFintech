<!--DOCTYPE html>
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
    <h1>Transacciones del RUT </h1>
        <div class="panel panel-default">
          <div class="panel-body">
          <TABLE class="table">
           <thead>  
            <th>id</th>
            <th>Amount</th>  
            <th>InitAmount</th> 
            <th>FinalAmount</th> 
            <th>TransaccionDate</th> 
            <th>Type</th>   
            </thead>
            <tbody>
            @foreach($post as $p)
              <tr>             
                <td>{{ $p->id }}</td>
                <td>{{ $p->amount }}</td>

                <td>{{ $p->initAmount }}</td>
                <td>{{ $p->finalAmount }}</td>
                <td>{{ $p->transactionDate }}</td>
                <td>{{ $p->type }}</td>
                
              </tr> 

            </tbody>
            @endforeach
            </TABLE>
          </div>
      </div>
  </div>

</body>
</html-->

@extends ('layouts.app')

@section ('titulo', 'Usuarios')

@section('content')

  <div class="container">
    <h1>Transacciones del RUT </h1>
        <div class="panel panel-default">
          <div class="panel-body">
          <TABLE class="table">
           <thead>  
            
            <th>Monto</th>  
            <th>Monto Inicial</th> 
            <th>Monto Final</th> 
            <th>Fecha de Transacción</th> 
            <th>Tipo</th>   
            </thead>
            <tbody>
            @foreach($post as $p)
              <tr>             
                
                <td>{{ $p->amount }}</td>

                <td>{{ $p->initAmount }}</td>
                <td>{{ $p->finalAmount }}</td>
                <td>{{ $p->transactionDate }}</td>
                <td>{{ $p->type }}</td>
                
              </tr> 

            </tbody>
            @endforeach
            </TABLE>
          </div>
      </div>
  </div>
@endsection