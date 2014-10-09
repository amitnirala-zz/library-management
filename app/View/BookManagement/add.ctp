<?php
	echo $this->Form->create('BookManagement',array('type'=>'file'));          // Model Name has to be passed into it
	echo $this->Form->input("isbn",array("label"=>"ISBN"));
	echo $this->Form->input("title",array("label"=>"Title of the Book:"));
	echo $this->Form->input("author_name",array("label"=>"Author Name"));
	echo $this->Form->input("edition",array("label"=>"Edition"));
	echo $this->Form->input("no_of_books",array("label"=>"No of Books"));
	echo $this->Form->input("publication_name",array("label"=>"Publication Name"));
	echo $this->Form->input("year",array("label"=>"Publication Year"));
	echo $this->Form->input("image",array("label"=>"Upload an image","type"=>"file"));
	echo $this->Form->end('Submit');
?>