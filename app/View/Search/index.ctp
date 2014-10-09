<?php
	echo $this->Form->create('search',array('type'=>'file'));          // Model Name has to be passed into it
	echo $this->Form->input("search_bookname",array("label"=>"Search Book"));
	echo $this->Form->end('Submit');
?>