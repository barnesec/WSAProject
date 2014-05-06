<!-- app/View/Users/add.ctp -->
<div class="users form">

<h4 class="title">Edit User</h4>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'author' => 'Author')));
echo $this->Form->end('Save User');
?>

</div>