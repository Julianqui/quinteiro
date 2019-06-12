@extends('template.base')

@section('title', 'Tu perfil')

@section('content')
<div class="container">
    <h1>Buen dia {{ Auth::user()->name }}</h1>





<p>Click the button to display the time.</p> -->

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function addZero(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function myFunction() {
  var d = new Date();
  var x = document.getElementById("demo");
  var h = addZero(d.getHours());
  var m = addZero(d.getMinutes());
  var s = addZero(d.getSeconds());
  x.innerHTML = h + ":" + m + ":" + s;
}
</script>











      @csrf
    <br>
    <br>
    <h2>Seleccione al usuario</h2>
    <table class="table">

  		@forelse (Auth::user()->products as $oneProduct)
  			<tr>
  				<td>
				  <a href="{{ route('products.show', $oneProduct->id) }}"><button class="btn btn-danger btn-lg" type="submit">


  						{{ $oneProduct->name }}


				  </button> 	</a>
  				</td>

  			</tr>
  		@empty

  		@endforelse
  	</table>
    <a href="/login"><button class="btn btn-primary" type="submit">Salir</button></a>
</div>
@endsection
