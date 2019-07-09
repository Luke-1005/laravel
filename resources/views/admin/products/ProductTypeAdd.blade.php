<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<title>Title of the document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="#" class="list-group-item active">
					产品类型管理
					</a>
					<a href="#" class="list-group-item">添加</a>
					<a href="#" class="list-group-item">管理</a>

				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-info">
					<div class="panel-heading">产品类型管理</div>
				</div>
				<div class="panel-body">
					<form action="/admin/product/typeadd" method="post">
						{{csrf_field()}}
						<input class="input-sm" type="text" name="typeName" placeholder="请输入产品类型">
						<input class="btn btn-info" type="submit" name="" value="确定添加">
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>