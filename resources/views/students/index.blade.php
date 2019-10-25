@extends('layout')

@section('content')

<br/>
<h1 class="container">Alunos</h1>
<br/>
<div class="">
	<div class="container">
		<table class="table">
			<thead class="">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Disciplina</th>
					<th scope="col">Data</th>
					<th scope="col">Nota</th>
				</tr>
			</thead>
			@foreach ($students as $dado)
			<tr>
				<tbody>
					<th class="">{{$dado->id}}</th>
					<td>{{$dado->name}}</td>
					<td>{{$dado->subject}}</td>
					<td>{{$dado->date}}</td>
					<td>{{$dado->grade}}</td>
					<td>
						<div style="display: flex;">
							<button style="margin-right: 3px;" class="btn btn-warning" onclick="javascript:location.href='/students/{{$dado->id}}/edit'">
								Editar
							</button>
							<form method="POST" onsubmit="return confirm('deseja Excluir?')" action="/students/{{$dado->id}}">
								@method('DELETE')
								@csrf
								<button class="btn btn-danger" >
									Excluir
								</button>
							</form>
						</div>
					</td>
				</tbody>
				@endforeach
			</tr>
		</table>	
	</div>
</div>
@endsection