<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blogs</title>
</head>
<body>
	@foreach($posts as $el) 
		<div> {{ $el }} </div>
	@endforeach
</body>
</html>