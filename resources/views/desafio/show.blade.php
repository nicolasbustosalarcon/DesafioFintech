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
          <TABLE class="table">
           <thead>	
            <th>id</th> 
            <th>Monto</th>  
            <th>Tipo de Cuenta</th>  
            <th>Estado</th>  
            <th>Limite</th>   
            </thead>
            <tbody>
            @foreach($post as $p)
              <tr>             
                <td>{{ $p->id }}</td>
                <td>{{ $p->amount }}</td>
                <td>{{ $p->type }}</td>

                <td>{{ $p->status }}</td>
                <td>{{ $p->limitAmount }}</td>
                @if($p->type == 'CVISTA')
                <td><a href="{{route('transacciones.show',$p->id)}} "><button class="btn btn-denger">Realizar Transacciones</button></a></td>
                @endif
                @if($p->type == 'CTD')
                  <td><a href="{{route('transacciones.show',$p->id)}} "><button class="btn btn-denger">Realizar Transacciones</button></a></td>
                @endif
                @if($p->type == 'TDC')
                  <td><a href="{{route('transacciones.show',$p->id)}} "><button class="btn btn-denger">Mis Transacciones</button></a></td>
                @endif
              </tr> 

            </tbody>
            @endforeach
            </TABLE>
          </div>
      </div>
  </div>

</body>
</html>