<?php
	echo $this->Form->create('BookTransaction');          // Model Name has to be passed into it
	echo $this->Form->input("studentid",array("label"=>"Student Id"));
	echo $this->Form->end('Submit');
?>