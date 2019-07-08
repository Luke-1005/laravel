<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>

</head>

<body>
<ul>
	@foreach($news as $v)
	<li><a href="/show/{{$v->id}}">{{$v->title}}</a></li>
	<time>{{date('Y-m-d',strtotime($v->created_at))}}</time>
	@endforeach

	{{$news->links()}}
</ul>
</body>

</html>