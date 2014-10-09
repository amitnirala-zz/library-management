<?php
class BookManagementController extends AppController{
	var $name = 'BookManagement';
	

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('ajax_search');		
	}
	
	public function all_books(){
		$this->set('abc',$this->BookManagement->find('all'));
		}

	public function ajax_search($text=''){
		if(!$this->request->is('ajax')){
			//throw new NotFoundException();
		}
		$this->autoRender=false;
		$results=$this->BookManagement->search($text);
		//pe($results);
		$hello = $results;
	 	$print_result = json_encode($results);
		echo $print_result;

		/*$find_res = $this->BookManagement->find('all', array(
        'conditions' => array('BookManagement.title' => $results)
    ));
		echo $find_res;*/
		//$this->set("results_data", $print_result);
	}

	 public function add() {
     if ($this->request->is('post')) {
            $filename = WWW_ROOT .'/img/'.$this->request->data['BookManagement']['image']['name']; 
		
           move_uploaded_file($this->data['BookManagement']['image']['tmp_name'],$filename);
			 @$this->request->data['BookManagement']['image'] = $this->request->data['BookManagement']['image']['name'];
			 $data=$this->data;
			 //$data['BookManagement']['book_id']=$this->BookManagement->getNewBookId();
			
		$data1 = $this->BookManagement->save($data);
	
         if ($data1) {
             $this->Session->setFlash('Your post has been saved.');
         } else {
            $this->Session->setFlash('Post not saved. ');
         }
		 
		 // $this->redirect(array('action' => 'index'));
     }
 }
 	public function login() {

	}
	
	public function index(){
		
		$this->set('abc',$this->BookManagement->find('all'));
		}

	public function view($id = NULL){
		$this->set('abc',$this->BookManagement->findByid($id));		
	}
	
	public function delete($id = NULL){
		$this->BookManagement->delete($id);
		$this->Session->setFlash('That entry has been deleted');
		$this->redirect(array('action'=>'index'));		
	}
	
	public function edit($id = NULL){
		if(empty($this->data)){
			$this->data = $this->BookManagement->findByid($id);
			}else{
			 $filename = WWW_ROOT .'/img/uploads/'.$this->request->data['BookManagement']['image']['name']; 
			//print_r($filename.'<br>');
           move_uploaded_file($this->data['BookManagement']['image']['tmp_name'],$filename);
			 @$this->request->data['BookManagement']['image'] = $this->request->data['BookManagement']['image']['name'];
				if($this->BookManagement->save($this->data)){
				$this->Session->setFlash('Data saved Sussessfully');
				$this->redirect(array('action'=>'index',$id));
			}
		}		
	}
	
	/*public function ajax_search($text=''){
		/*if(!$this->request->is('ajax')){
			throw new NotFoundException();
		}*/
		/*$this->autoRender=false;
		$results=$this->BookManagement->search($text);
		//echo '<div style="height:300px";  '.''</div>;
	 	$print_result = json_encode($results);
		echo $print_result;
	}*/
	public function search(){
	//$this->render = "BookTransaction/search"
	//$this->layout = 'search';
	}
}
?>