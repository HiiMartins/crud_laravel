<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>page home</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style type="text/css">body {background-color: #F3F5F5;}</style>
</head>
<body>
  <div style="padding-bottom: 100px;">
    <div class="p-3 mb-2 bg-secondary text-white">
      <ul class="container nav justify-content-right">
  		  <li class="nav-item">
    		  <a class="nav-link active text-light font-weight-bold" href="/students">Home</a>
  		  </li>
  		  <li class="nav-item">
    	    <a class="nav-link text-light font-weight-bold" href="/students/create">Cadastrar alunos</a>
  	    </li>
      </ul>  
    </div>  

    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
   </div>  
</body>
</html><?php /**PATH C:\xampp\htdocs\crud\resources\views/layout.blade.php ENDPATH**/ ?>