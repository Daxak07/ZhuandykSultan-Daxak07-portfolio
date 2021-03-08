<!DOCTYPE html>
<html>
<head>
	<title>Create new blog</title>
</head>
<body>
	<form method="post" action="{{  route('add_blog')}}">
		@csrf
		<input type="text" name="title" placeholder="title">
		<input type="text" name="body" placeholder="body">
		<button class="sumbit">Create</button>
	</form>
</body>
</html>