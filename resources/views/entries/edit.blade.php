@extends('../layouts.app')

@section('content')
<div class="container panel panel-default">
	<section>
		<h1>Formulario de entradas</h1>
		<form>
			<fieldset>
				<div class="form-group">
					<label>T&iacute;tulo</label>
					<input type="text" class="form-control" placeholder="Titulo del blog" required>
				</div>
				<div class="form-group">
					<label>Cuerpo de la entrada</label>
					<input type="text" class="form-control" placeholder="Texto de la entrada" required>
				</div>
				<div class="form-group">
					<label>Autor</label>
					<input type="text" class="form-control" placeholder="Autor de la entrada" required>
				</div>
				<div class="form-group">
					<label>Categor&iacute;a</label>
					<input type="text" class="form-control" placeholder="Categoria de la entrada" required>
				</div>
				<div class="form-group">
					<label>Permalink</label>
					<input type="text" class="form-control" placeholder="Permalink" required>
				</div>
				<div class="form-group">
					<label>Etiquetas</label>
					<input type="text" class="form-control" placeholder="Etiquetas" required>
				</div>
				<button type="reset" class="btn btn-default">Borrar datos</button>
				<button type="submit" class="btn btn-default">Registrar</button>
			</fieldset>
		</form>
	</section>
</div>
@endsection