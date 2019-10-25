@extends('layout')

@section('content')
<br/>
<h2 class="container">Inserir Aluno</h2><br/>

<div class="container">
	<form id="createStudents" name="createStudents" method="POST" action="/students">
		{{csrf_field()}}
		<div class="container ">
			<div class="form-group col-sm-6">
				<label for="lblName" class="font-weight-bold">
					Nome:
				</label>
				<input type="text" name="name" id="name" class="form-control" required/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblSubject" class="font-weight-bold">
					Disciplina:
				</label>
				<input type="text" name="subject" id="subject" class="form-control" required/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblDate" class="font-weight-bold">
					Data:	
				</label>
				<input type="date" name="date" id="date" class="form-control" required/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblGrade" class="font-weight-bold">
					Nota:	
				</label>
				<input type="number" step="0.1" min="0" max="10" name="grade" id="grade" class="form-control" required />
			</div>
			<div class="">
				<input type="button" value="Retornar" id="btnGrv" class="btn btn-primary" onclick="javascript: location.href='/students'"/>
				<input type="submit" value="Gravar" id="btnGrv" class="btn btn-success" />
				<input type="reset" value="Limpar" id="btnReset"  class="btn btn-secondary">
			</div>
		</div>
	</form>
</div>
@endsection
		
