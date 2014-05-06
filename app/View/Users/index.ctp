<h4 class="title">Django Users</h4>
<p><?php echo $this->Html->link(
	'Add User', 
	array('controller' => 'users', 'action' => 'add'), array('class' => 'title'));
?></p>
<table>
    <tr>
        <th>Username</th>
		<th>Role</th>
    </tr>

    <!-- Here is where we loop through our $users array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
		<td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['role']; ?></td>
		<td>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Form->postLink('Delete',
			array('action' => 'delete', $user['User']['id']),
			array('confirm' => 'Are you sure?'));
			?>
		</td>
    </tr>
    <?php endforeach; ?>

</table>