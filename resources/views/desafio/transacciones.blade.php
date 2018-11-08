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

  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ingresos',     {{$contador_ingreso}}],
          ['Egresos',      {{$contador_egreso}}]
        ]);

        var options = {
          title: 'Grafico de Ingresos/Egresos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <a href="/usuarios"><button class="btn btn-danger">Regresar</button></a>
  </body>
</html>

@endsection