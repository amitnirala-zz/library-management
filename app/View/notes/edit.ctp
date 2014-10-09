<h2>Update Books</h2>
<?php
echo $this->Form->create('BookManagement',array('action'=>'edit','type'=>'file'));
echo $this->Form->input('id',array('type'=>'hidden'));
echo $this->Form->input("isbn");
echo $this->Form->input("title");
echo $this->Form->input("author_name");
echo $this->Form->input("edition");
echo $this->Form->input("no_of_books");
echo $this->Form->input("publication_name");
echo $this->Form->input("year");
echo $this->Form->input('image',array("type"=>'file'));
echo $this->Form->end('Update post');
?>