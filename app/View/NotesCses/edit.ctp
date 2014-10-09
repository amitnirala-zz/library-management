<div class="notesCses form">
<?php echo $this->Form->create('NotesCse'); ?>
	<fieldset>
		<legend><?php echo __('Edit Notes Cse'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('branch');
		echo $this->Form->input('sem');
		echo $this->Form->input('subject_code');
		echo $this->Form->input('subject_name');
		echo $this->Form->input('unit');
		echo $this->Form->input('topic');
		echo $this->Form->input('topic_detail');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('NotesCse.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('NotesCse.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Notes Cses'), array('action' => 'index')); ?></li>
	</ul>
</div>
