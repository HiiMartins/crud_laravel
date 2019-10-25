<?php $__env->startSection('content'); ?>

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
			<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<tbody>
					<th class=""><?php echo e($dado->id); ?></th>
					<td><?php echo e($dado->name); ?></td>
					<td><?php echo e($dado->subject); ?></td>
					<td><?php echo e($dado->date); ?></td>
					<td><?php echo e($dado->grade); ?></td>
					<td>
						<div style="display: flex;">
							<button style="margin-right: 3px;" class="btn btn-warning" onclick="javascript:location.href='/students/<?php echo e($dado->id); ?>/edit'">
								Editar
							</button>
							<form method="POST" onsubmit="return confirm('deseja Excluir?')" action="/students/<?php echo e($dado->id); ?>">
								<?php echo method_field('DELETE'); ?>
								<?php echo csrf_field(); ?>
								<button class="btn btn-danger" >
									Excluir
								</button>
							</form>
						</div>
					</td>
				</tbody>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tr>
		</table>	
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/students/index.blade.php ENDPATH**/ ?>