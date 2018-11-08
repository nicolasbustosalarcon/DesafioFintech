@section('content')
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha Inicio formato dd-MM-yyyy</label>
    <input type="date" class="form-control" name="beginDate" >
    <small class="form-text text-muted">beginDate.</small>
  
    <label for="exampleInputEmail1">Fecha Fin formato dd-MM-yyyy</label>
    <input type="date" class="form-control" name="endDate
" >
    <small class="form-text text-muted">endDate
.</small>
  
  <label>payStatus</label>
  <select name="payStatus" class="form-control">
    <option disabled selected value>--</option>
    <option value>PAGADO</option>    
    <option value>PENDIENTE</option>    
  </select>

  <label>type</label>
  <select name="type" class="form-control">
    <option disabled selected value>--</option>
    <option value>POR_FACTURAR</option>    
    <option value>FACTURADO</option>    
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Execute</button>

</form>
@endsection
