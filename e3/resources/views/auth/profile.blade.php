@extends('template.base')

@section('title', 'Tu perfil')

@section('content')
<div class="container">
    <h1>Buen dia {{ Auth::user()->name }}</h1>

      @csrf
      <a href="/login"><button class="btn btn-primary" type="submit">Salir</button></a>


    <br>
    <br>
    <h2>Seleccione al usuario</h2>
    <table class="table">

	@foreach (Auth::user() as $user)
    	<p>This is user {{ $user}}</p>
	@endforeach

			<h1>Hola</h1>
		  {{ Auth::user()->products }}
			<h1>Hola</h1>
		  {{Auth::user()}}

		  <h1>Ahora</h1>





		@for( $i=0; $i < 3; $i++)
		  {{ Auth::user()}}
		  <p>Separacion</p>
		@endfor







		@forelse (Auth::user()->products as $oneProduct)
		  <tr>
		  	<td>
				<a href="{{ route('products.show', $oneProduct->id) }}"><button class="btn btn-danger btn-lg" type="submit">
					{{ $oneProduct->name }}
  					</button></a>  
  				</td>
  			</tr>
  		@empty
		@endforelse

		@forelse (Auth::user()->products as $oneProduct)
		  <tr>
		  	<td>
				<a href="{{ route('products.show', $oneProduct->id) }}"><button class="btn btn-danger btn-lg" type="submit">
					{{ $oneProduct->name }}
  					</button></a>  
  				</td>
  			</tr>
  		@empty
		@endforelse  


		@forelse (Auth::user()->products as $oneProduct)
		  <tr>
  				<td>
				  <a href="{{ route('products.show', $oneProduct->id) }}"><button class="btn btn-danger btn-lg" type="submit">
				  		{{ $oneProduct->name }}
  					</button></a>  
  				</td>
  		  </tr>
  		@empty
		@endforelse
  	</table>
</div>
@endsection
