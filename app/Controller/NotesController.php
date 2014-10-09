<?php

class NotesController extends AppController{
function add(){
if(!empty($this->request->data)){
	$this->notes->save($this->request->data);
	
	}
}
function index(){
	
	}
}
?>
