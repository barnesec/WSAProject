<h4 class="title">Django Posts</h4>
<p><?php echo $this->Html->link(
	'Add Post', 
	array('controller' => 'posts', 'action' => 'add'), array('class' => 'title'));
?></p>
<table>
    <tr>
        <th>Internship</th>
		<th>Company</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Edit</th>
		<th>Delete</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
		<td><?php echo $post['Post']['company']; ?></td>
        <td><?php echo $post['Post']['created']; ?></td>
		<td><?php echo $post['Post']['modified']; ?></td>
		<td>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Form->postLink('Delete',
			array('action' => 'delete', $post['Post']['id']),
			array('confirm' => 'Are you sure?'));
			?>
		</td>
    </tr>
    <?php endforeach; ?>

</table>