<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>{{$article->title}}</title>
	
	
</head>
<body>
	
	
	<h1>{{ $article->title }}</h1>
	<br><br>
	<hr>
	{{$article->content}}
	<br><br>
	<hr>
	{{$article->user->name}} | {{ $article->category->name}} |
	@foreach($article->tags as $tag)
		{{$tag->name}}
	@endforeach 
 
</body>
</html>