<h4 class="title">Add Post</h4>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('company');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->hidden('created');
echo $this->Form->end('Save Post');
?>