<?php
	//pe($books_issued);
	$i = 6;
	$j=0;
	/*while($j<$books_issued){
		array($j) = $j;
		$arr = array($j);

		$j++;
	}
	pe($arr);*/
	echo $this->Form->create('BookManagement',array('type'=>'file'));          // Model Name has to be passed into it
		$arr = array(1, 2, 3, 4);
		$i=1; 
		foreach ($arr as $books_issued): 
		echo $this->Form->input("book$i",array("label"=>"Book $i"));
		$i++;  
	?> 
	<?php endforeach; ?> 
<?php echo $this->Form->end("Submit"); ?>
