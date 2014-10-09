<h2>View all Books</h2>
<table>
	<tr>
		<th>ISBN</th>
        <th>Title</th>
        <th>Author Name</th>
        <th>Edition</th>
        <th>Publication Name</th>
        <th>Publication Year</th>
 	</tr>
    <?php
    	foreach($abc as $Book):?>
		<tr>	
        	<td><?php echo $this->html->link($Book['BookManagement']['isbn'],array('action'=>'view',$Book['BookManagement']['id'])); ?></td>  
            <!-- $variable_name['Modelname']['name'] -->
            <td><?php echo $Book['BookManagement']['title']; ?></td>
            <td><?php echo $Book['BookManagement']['author_name']; ?></td>   
             
            <td><?php echo $Book['BookManagement']['edition']; ?></td>

            <td><?php echo $Book['BookManagement']['isbn']; ?></td>
            <td><?php echo $Book['BookManagement']['publication_name']; ?></td>        	
		</tr>	
	<?php endforeach; ?>

</table>