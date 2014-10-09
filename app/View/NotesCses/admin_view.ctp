<div class="notesCses view">
<h2><?php echo __('Notes Cse'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($notesCse['NotesCse']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch'); ?></dt>
		<dd>
			<?php echo h($notesCse['NotesCse']['branch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sem'); ?></dt>
		<dd>
			<?php echo h($notesCse['NotesCse']['sem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject Code'); ?></dt>
		<dd>
			<?php echo h($notesCse['NotesCse']['subject_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject Name'); ?></dt>
		<dd>
			<?php echo h($notesCse['NotesCse']['subject_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo h($notesCse['NotesCse']['unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Topic'); ?></dt>
		<dd>
			<?php echo h($notesCse['NotesCse']['topic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Topic Detail'); ?></dt>
		<dd>
			<?php echo h($notesCse['NotesCse']['topic_detail']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notes Cse'), array('action' => 'edit', $notesCse['NotesCse']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Notes Cse'), array('action' => 'delete', $notesCse['NotesCse']['id']), null, __('Are you sure you want to delete # %s?', $notesCse['NotesCse']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes Cses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notes Cse'), array('action' => 'add')); ?> </li>
	</ul>
</div>
