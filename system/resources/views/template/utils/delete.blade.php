<form action="{{$url}}" method="post" onsubmit="return confirm('Apakah anda yakin akan menghapus data ini ?')">
	@csrf
	@method("DELETE")

	<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
</form>