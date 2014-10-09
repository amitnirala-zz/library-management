<p> 
	<?php echo $this->html->link('Add a Book',array('action'=>'add')); ?>
</p>
<br/>
<table>
<tr>
<th>S.No</th>
<th>ISBN NO.</th>
<th>Book Title</th>
<th>Author Name</th>
<th>Edition</th>
<th>Number of books</th>
<th>Publication Name</th>
<th>Year</th>
<th>Action</th>
<th>Image of book</th>
</tr>
<?php
$i=1;
foreach($abc as $BookManagement)
{
	?>
    
    <tr>
    <td><?php echo $i++; ?></td>
            <!-- $variable_name['Modelname']['name'] -->
    <td><?php echo $this->html->link($BookManagement['BookManagement']['isbn'],array('action'=>'view',$BookManagement['BookManagement']['id'])); ?></td>
    <td><?php echo $BookManagement['BookManagement']['title']; ?></td>
    <td><?php echo $BookManagement['BookManagement']['author_name']; ?></td>
    <td><?php echo $BookManagement['BookManagement']['edition']; ?></td>
    <td><?php echo $BookManagement['BookManagement']['no_of_books']; ?></td>
    <td><?php echo $BookManagement['BookManagement']['publication_name']; ?></td>
    <td><?php echo $BookManagement['BookManagement']['year']; ?></td>
    <td><?php echo $this->html->link('Edit',array('action'=>'edit',$BookManagement['BookManagement']['id'])); ?>
	<?php echo $this->html->link('Remove',array('action'=>'delete',$BookManagement['BookManagement']['id']),NULL,'Are You Sure'); //delete array 4 parameters action,id,html attribute like id class ,javascript confirmation
	 ?></td>
     <td><img width="100" height="100" src="<?php echo $this->webroot.'img/'.$BookManagement['BookManagement']['image']; ?>" /></td>
     </tr>
<?php
}
?>
</table>
