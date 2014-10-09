<h2>Login</h2>
<?php
	echo $this->Form->create();
	echo $this->Form->input('email');
	echo $this->Form->input('password');
	echo $this->Form->end('Login');
	pr($this->data);
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="">
		
			<h1>Login Form</h1>
			<div>
				<?php echo $this->Form->create(); ?>
				<?php echo $this->Form->input('email'); ?>
			</div>
			<div>
				<?php echo $this->Form->input('password'); ?>
			</div>
			<div>
				<?php echo $this->Form->end('Login'); ?>
				<a href="#">Register</a>
			</div>
		</form>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>