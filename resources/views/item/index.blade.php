<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'ensolvers')</title>
</head>
<body>
	
	<h1  >To-Do List</h1>
	<ul>
		@forelse($items as $item)
		
		    <label><input type="checkbox" class="myCheckbox" >{{$item->contenido}} <a href="{{ route('item.edit', $item)  }}">Edit</a></label>
		    
		    <form method="POST" action="{{route('item.destroy',$item)}}">
	           @csrf @method('DELETE')
	           <button>Remove</button><br>
           </form>
		@empty
		  <p>No hay nada que mostrar</p>		
		@endforelse
	</ul>

<form method="POST" action="{{ route('item.store') }}">
	@csrf

	<input type="string" name="contenido" value="" placeholder="New task">
    <button>Add</button>
</form>
</body>

</html>