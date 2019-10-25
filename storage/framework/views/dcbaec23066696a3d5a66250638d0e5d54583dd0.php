<!DOCTYPE html>
<html>
<head>
	<title>page home</title>
</head>
<body>
	<h1>Lista de Alunos</h1>
	<table border="1" width="400" align="center">
		<tr>
			<th>Nome</th>
			<th>Matéria</th>
			<th>Nota</th>
		</tr>
		<?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<th><?php echo e($item['name']->students); ?></th>
			<th><?php echo e($item['subject']->students); ?></th>
			<th><?php echo e($item['grade']->students); ?></th>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<form method="POST" action="/">
			<!--<?php echo e(csrf_field()); ?> adciona um header de segurança para o form -->
			<input type="submit" value="Adicionar Aluno"/>
		</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\crud\resources\views/home.blade.php ENDPATH**/ ?>