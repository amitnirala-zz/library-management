<section id="content">
		<!--<form action="">-->
			<h1>Login Form</h1>
			<?php echo $this->Form->create(); ?>
			<div>
				<?php echo $this->Form->input('email',array('Label'=>'Email')); ?>
			</div>
			<div>
				<?php echo $this->Form->input('password'); ?>
			</div>
			<div>
 			<?php echo $this->Form->end('Login'); ?>
 			<?php echo AuthComponent::password('12345'); ?>
			<?php  //echo $this->Html->link('Signup',array('controller'=>'users','action'=>'add'),); ?>
			<?php
				echo $this->Html->link(
						    'Signup',
						    array(
						        'controller'=>'users',
						        'action'=>'add',
						        ),
						    array(
						        'class' => 'button'
						    )
						);
			?>
			<?php  echo $this->Session->flash(); ?>
			</div>
		</form><!-- form -->
	</section><!-- content -->