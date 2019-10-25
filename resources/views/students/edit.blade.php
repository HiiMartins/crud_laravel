@extends('layout')

@section('content')
<br/>
<h2 class="container">Editar Aluno</h2>
<br/>
<div class="container">
	<form method="POST" action="/students/{{$students->id}}">
		@method('PATCH')
		{{csrf_field()}}

		<div class="container">
			<div class="form-group col-sm-6">
				<label for="lblId" class="font-weight-bold">
					ID:
				</label>
				<label for="textId" class="form-weight-bold">
					{{$students->id}}
				</label>	
			</div>
			<div class="form-group col-sm-6">
				<label for="lblName" class="font-weight-bold">
					Nome:
				</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Title" value="{{ $students->name}}"/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblSubject" class="font-weight-bold">
					Subject:
				</label>
				<input type="text" class="form-control" name="subject" id="subject" placeholder="Title" value="{{ $students->subject}}"/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblDate" class="font-weight-bold">
					Data:
				</label>
				<input type="date" class="form-control" name="date" id="date" placeholder="Data" value="{{ $students->date}}"/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblGrade" class="font-weight-bold">
					Nota:
				</label>
				<input type="number" step="0.1" min="0" max="10" class="form-control" name="grade" id="grade" placeholder="Nota" value="{{ $students->grade}}"/>
			</div>
			<div class="container">
				<input type="button" value="Retornar" class="btn btn-primary" id="btnGrv" onclick="javascript: location.href='/students'">
				<input type="submit" value="Gravar" class="btn btn-success" id="btnGrv">
			</div>
		</div>
	</form>
</div>

@endsection