
<div class="container">
	<h1>{{$id->title}}</h1>
	<div>
		{{$id->content}}
	</div>
</div>

<div>
	@if($pre)
	<a href="{{$pre->id}}">{{$pre->title}}</a>
	@else
	<span>已经最上一页了</span>
	@endif

	@if($next)
	<a href="{{$next->id}}">{{$next->title}}</a>
	@else
	<span>已经最后一页</span>
	@endif

</div>