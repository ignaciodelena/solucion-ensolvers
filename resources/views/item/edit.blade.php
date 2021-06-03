<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'ensolvers')</title>
	<style>
		
	</style>
</head>
<body>
	
	<h1>Editing Task {{$item->contenido}}</h1>
		
	<form method="POST" action="{{route('item.update',$item)}}">
	    @csrf @method('PATCH')
	    <input type="string" name="contenido" value="" placeholder="{{$item->contenido}}"><br>
	     <button>Save</button>
	     <a href="javascript:history.back()">Cancel</a>
    </form>
</body>
</html>