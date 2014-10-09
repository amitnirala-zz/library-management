<?php
class BookTransactionController extends AppController{
	var $name = 'BookTransaction';
	
	public function index(){
					
		
		}
		
	public function issue(){
		if(!empty($this->data)){
		$studentid = $this->data['BookTransaction']['studentid'];
		echo '<br/>';
		$bookid_array = $this->BookTransaction->find('all', array(
        'conditions' => array('BookTransaction.studentid' => $studentid)
    ));
		$no_of_books = $bookid_array[0]['BookTransaction']['no_of_books_issued'];
		if(!$current_user=9){
		$to_be_issue = 8-$no_of_books;
		}else{
		$to_be_issue = 6-$no_of_books;	
		}

		$this->redirect('/BookTransaction/new_issue/' . $to_be_issue);
		//pr($no_of_books);
		//pr($to_be_issue);
		}
	}


	public function new_issue($id) {
		$this->set('books_issued',$id);
		
	}
	
	public function submit(){
		
			
		
	}
}
?>