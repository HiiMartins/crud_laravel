<?php $__env->startSection('content'); ?>
<br/>
<h2 class="container">Editar Aluno</h2>
<br/>
<div class="container">
	<form method="POST" action="/students/<?php echo e($students->id); ?>">
		<?php echo method_field('PATCH'); ?>
		<?php echo e(csrf_field()); ?>


		<div class="container">
			<div class="form-group col-sm-6">
				<label for="lblId" class="font-weight-bold">
					ID:
				</label>
				<label for="textId" class="form-weight-bold">
					<?php echo e($students->id); ?>

				</label>	
			</div>
			<div class="form-group col-sm-6">
				<label for="lblName" class="font-weight-bold">
					Nome:
				</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Title" value="<?php echo e($students->name); ?>"/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblSubject" class="font-weight-bold">
					Subject:
				</label>
				<input type="text" class="form-control" name="subject" id="subject" placeholder="Title" value="<?php echo e($students->subject); ?>"/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblDate" class="font-weight-bold">
					Data:
				</label>
				<input type="date" class="form-control" name="date" id="date" placeholder="Data" value="<?php echo e($students->date); ?>"/>
			</div>
			<div class="form-group col-sm-6">
				<label for="lblGrade" class="font-weight-bold">
					Nota:
				</label>
				<input type="number" step="0.1" min="0" max="10" class="form-control" name="grade" id="grade" placeholder="Nota" value="<?php echo e($students->grade); ?>"/>
			</div>
			<div class="container">
				<input type="button" value="Retornar" class="btn btn-primary" id="btnGrv" onclick="javascript: location.href='/students'">
				<input type="submit" value="Gravar" class="btn btn-success" id="btnGrv">
			</div>
		</div>
	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/students/edit.blade.php ENDPATH**/ ?>