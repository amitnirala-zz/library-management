<?php
class BookManagement extends AppModel{
	//var $name = 'book';
	var $validate = array(
		'isbn'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'ISBN should be field'
			)	
		),
		'title'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Title should be field'
			)
		),
		'author_name'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Author Name should be field'
			)
		),
		'edition'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Edition should be field'
			)
		),
		'publication_name'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Publication Name should be field'
			)
		),
		'year'=>array(
			'fill_all_boxes'=>array(
			'rule'=>'notEmpty',
			'message'=>'Year should be field'
			),
		),
		/*'image'=>array(
			'upload_error' => array(
				'rule' => 'upload error',
				'message' =>'The image upload failed',
				'allowEmpty'=> TRUE,
			),
			'mineType' =>array(
				'rule'=>array('mineType',array('image/gif','image/jpg','image/jpeg','image/png')),
				'message' => 'Please only upload images(gif, jpg, jpeg, png).',
				'allowEmpty' => TRUE,
			),
			'fileSize'=> array(
				'rule' => array('fileSize','<=','1MB'),
				'message'=>'Image should be less than 1 MB',
				'allowEmpty'=>TRUE, 
			),
			'ProcessCoverImage'=>array(
				'rule'=>'ProcesssImageUpload',
				'message'=>'Unable to process image',
				'allowEmpty'=>TRUE,
			),
		),
	);*/
	
);
	public function getNewBookId(){
		
		do{
		$b=uniqid('bk_');
		}while(!$this->isUnique(array('book_id'=>$b)));
		 
		return $b;
	}
	public function search($text){
			$a = Hash::extract($this->find('all',array(
				'conditions'=> array(
					'title like'=>$text.'%',
				),
				'fields'=>array(
					'title'
				)
			)),'{n}.{s}.title');
			
			return $a;
		}
}
?>