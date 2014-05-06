    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to the Django Project</h1>
        <p>The Django Project, as we’ve decided to call it until further notice, will be a system that is aimed at Information Technology students; what we see it being is a local site where we can contact our peers for help and guidance for classes, whether we’re contacting students who are in the same classes as us or upperclassman who have more knowledge to share.</p>
		<?php echo $this->Html->link('Learn More', 'django', array('class' => 'btn btn-primary btn-lg')); ?>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Student Posts</h2>
          <p>If you're already a user, go here to check out some of the posts that are already up.  The project is still in beta, so it doesn't have all of the features that we were hoping to have.</p>
		  <?php echo $this->Html->link('View Posts', array('controller' => 'posts', 'action' => 'posts'), array('class' => 'btn btn-default')); ?>
        </div>
        <div class="col-md-4">
          <h2>Django's Goal</h2>
          <p> We didn't throw this together just to get a good grade.  We actually want to make a difference and help our peers.  Find out more here. </p>
		  <?php echo $this->Html->link('View Goals', array('controller' => 'posts', 'action' => 'goals'), array('class' => 'btn btn-default')); ?>
       </div>
        <div class="col-md-4">
          <h2>Other Information</h2>
          <p>If you were looking for more information that isn't directly related to The Django Project, such as who worked on it and why, check it out here.</p>
		  <?php echo $this->Html->link('View Other Info', array('controller' => 'posts', 'action' => 'other'), array('class' => 'btn btn-default')); ?>
        </div>
      </div>