<form method="post" action="{{route('msg.store')}}">
	{{csrf_field()}}
	<input type="text" name="title">
	<input type="text" name="content">
	<input type="submit" name="" value="提交">
</form>