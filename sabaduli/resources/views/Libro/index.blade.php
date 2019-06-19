@extends('template.base')

@section('title', 'Logueate')

@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
        <img class="logui" src="images/escudo.jpg" alt="">
        <br><br>
          <div class="pull-left"><h1>Administracion de usuarios</h1></div>
          <div class="pull-right">
            <div class="btn-group">

            </div>
          </div>
          <div class="table-container">
          <!-- <img src="user.png" alt=""> -->
            <table id="mytable" class="table table-bordred table-striped">
             <!-- <thead>
               <th>Usuario</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Rol</th>
               <th>Accion</th>
               <th>Tacho para la eliminacion</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead> -->
             <tbody>
              @if($libros->count())
              @foreach($libros as $libro)
              <tr>

                <!-- <td><button class="btn btn-danger btn-lg" type="submit">{{$libro->nombre}}</button></td> 	 -->

                <td><img src="images/user.png" class="user" alt=""> <button class="btn btn-danger btn-lg" type="submit">{{$libro->usuario}}</button></td>

                <!-- <td>{{$libro->apellido}}</td>
                <td>{{$libro->rol}}</td> -->
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->precio}}</td>

                <td><br><br> <a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"><img src="images/lapiz.png" class="icono" title="Modificar" alt="Modificar">  </span></a></td>
                <td>
                  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}
                   <br>
                   <input name="_method" type="hidden" value="DELETE">

                    <br>
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"><img src="images/trash.png" class="icono" title="Eliminar" alt="Modificar"> </span></button>
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
          <a href="{{ route('libro.create') }}" class="btn btn-info" >Añadir Usuario</a>
        </div>
        <br><br><br><br>
      </div>
      <!-- <a href="/"><button class="btn btn-primary" type="submit">Salir</button></a> -->
      {{ $libros->links() }}
      <!-- <br><br>

      <a href="{{ URL::previous() }}"><button class="btn btn-primary" type="submit">Anterior</button></a> -->






    </div>
  </div>
</section>

@endsection
