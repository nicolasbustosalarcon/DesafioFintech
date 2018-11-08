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
            <th>Producto</th>  
            <th>productAgency</th> 
            <th>quota</th> 
            <th>amount</th>
            <th>quotaAmount</th> 
            <th>type</th>
            <th>transactionDate</th>
            <th>paydate</th>
            <th>quotaDate</th>
            <th>payStatus</th>
            <th>trxID</th>

            </thead>
            <tbody>
            @foreach($post as $p)
              <tr>             
                <td>{{ $p->id }}</td>
                <td>{{ $p->product }}</td>
                <td>{{ $p->productAgency }}</td>
                <td>{{ $p->quota }}</td>
                <td>{{ $p->amount }}</td>
                <td>{{ $p->quotaAmount }}</td>
                <td>{{ $p->type }}</td>
                <td>{{ $p->transactionDate }}</td>
                <td>{{ $p->payDate }}</td>
                <td>{{ $p->quotaDate }}</td>
                <td>{{ $p->payStatus }}</td>
                <td>{{ $p->trxId }}</td>      
              </tr> 

            </tbody>
            @endforeach
            </TABLE>
          </div>
      </div>
  </div>

</body>
</html>



