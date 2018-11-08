@extends ('layouts.app')

@section ('titulo', 'Usuarios')

@section('content')
  <div class="row">
    <div class="panel-body">
    @include('desafio.search')

  </div>
      <table class="table table-striped">
        <thead>
          <th>Rut</th>
          <th>Nombre</th>
        </thead>
        <tbody>
          @foreach($all as $a)
          @if ($a->rut == $rut)
            <tr>
                <td><a href="{{route('usuario.show',$a->rut)}} ">{{ $a->rut }}</a></td>
                <td>{{ $a->fullName }}</td>
            </tr>
          @endif
          @endforeach
        </tbody>
      </table>
      
  </div>
@endsection