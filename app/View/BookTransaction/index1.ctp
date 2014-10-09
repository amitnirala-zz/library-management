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
        	<td><?php echo $this->html->link($Book['Book']['name'],array('action'=>'view',$Book['Book']['id'])); ?></td>  
            <!-- $variable_name['Modelname']['name'] -->
            <td><?php echo $Book['Book']['isbn']; ?></td>
            <td><?php echo $Book['Book']['title']; ?></td>
            <td><?php echo $Book['Book']['auther_name']; ?></td>    
            <td><?php echo $Book['Book']['Edition']; ?></td>
            <td><?php echo $Book['Book']['Publication Name']; ?></td>        	
		</tr>	
	<?php endforeach; ?>

</table>