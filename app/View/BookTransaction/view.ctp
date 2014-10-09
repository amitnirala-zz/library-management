<h2><?php echo "<br/>Title => <b class='result_name'>". @$abc['BookManagement']['title']."</b>"; ?><br />
<p><?php echo "<br/>ISBN <b class='result_name'>".@$abc['BookManagement']['isbn']."</b>"; ?></p>
<p><?php echo "Author Name <b class='result_name'>".@$abc['BookManagement']['author_name']."</b>"; ?></p>
<p><?php echo "Edition <b class='result_name'>".@$abc['BookManagement']['edition']."</b>"; ?></p>
<p><?php echo "No of Books <b class='result_name'>".$abc['BookManagement']['no_of_books']."</b>"; ?></p>
<p><?php echo "Publication Name <b class='result_name'>".$abc['BookManagement']['publication_name']."</b>"; ?></p>
<p><?php echo "Year of pulication <b class='result_name'>" .$abc['BookManagement']['year']."</b>"; ?></p>
<p><?php echo $this->Html->image("".$abc['BookManagement']['image'], array(
    "alt" => "Book Image",
	"id"=>"book_image_view",
	"height"=>"300",
	"width"=>"200",
	"border"=>"5",
	"border-color"=>"black",
));// "Image : ".$this->html->image('../../webroot/img/uploads/'.$abc['BookManagement']['image']);//'<img height="200" width="300" src="../../webroot/img/uploads/'.$abc['BookManagement']['image'].'" <br>'; ?></p>
<p>
	<?php echo $this->html->link('Back',array('action'=>'index')); ?>
    <?php echo $this->html->link('Edit',array('action'=>'edit')); ?>
    <?php echo $this->html->link('Remove',array('action'=>'delete',$abc['BookManagement']['id'])); ?> 
</p>
<head>
<style type="text/css">
	.result_name{
		color:#000;
		border-left-color:
		margin-left:33;}
</style>
<img style="margin-left:300px;"/>

</head>
