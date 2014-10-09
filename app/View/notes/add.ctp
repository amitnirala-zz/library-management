<?php
	echo $this->Form->create('Notes',array('type'=>'file'));          // Model Name has to be passed into it
	echo $this->Form->input("branch",array("label"=>"Branch"));
	echo $this->Form->input("sem",array("label"=>"Sem"));
	echo $this->Form->input("subject_code",array("label"=>"Subject Code"));
	echo $this->Form->input("subject_name",array("label"=>"Subject Name"));
	echo $this->Form->input("topic",array("label"=>"Topic"));
	echo $this->Form->input("topic_detail",array("label"=>"Topic Details"));
	echo $this->Form->end('Submit');
?>