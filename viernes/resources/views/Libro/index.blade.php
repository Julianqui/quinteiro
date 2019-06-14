@extends('template.base')

@section('title', 'Logueate')

@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Alta de usuarios</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('libro.create') }}" class="btn btn-info" >Añadir Usuario</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Usuario</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Rol</th>
               <!-- <th>Accion</th>
               <th>Tacho para la eliminacion</th> -->
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($libros->count())
              @foreach($libros as $libro)
              <tr>
                <td>{{$libro->nombre}}</td>
                <td>{{$libro->nombre}}</td>
                <td>{{$libro->apellido}}</td>
                <td>{{$libro->rol}}</td>
                <!-- <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td> -->
                <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $libros->links() }}
    </div>
  </div>
</section>

@endsection
