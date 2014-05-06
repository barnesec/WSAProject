<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		The Django Project
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min', 'cake.custom'));
		echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'bootstrap.min.js'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('The Django Project', array( 'controller' => 'posts', 'action' => 'index'), array('class' => 'navbar-brand')); ?>
        </div>
        
<!-- If user isn't logged in, show log in inputs.  If they are logged in, show "Welcome, username" and the logout button. -->
        
      <div class="navbar-collapse collapse">
<?php if (!$loggedIn): ?>
<div id="userNotLogged">
<form class="navbar-form navbar-right" id="UserLoginForm" action="/test2/Users/login" role="form" method="post">

    <div class="form-group">
    	<input type="text" placeholder="Email" class="form-control" name="data[User][username]" id="UserUsername" maxlength="50">
    </div>
    <div class="form-group">
    	<input type="password" placeholder="Password" class="form-control" name="data[User][password]" id="UserPassword">
    </div>
    	<button type="submit" class="btn btn-success">Sign in</button>
        
	<?php
	echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-default')); 
	?>
</form>
</div>
<?php else: ?>
<div id="userLoggedIn" class="navbar-form navbar-right">
    <?php 
	echo "<span style='color:#fff; font-size: 1.5em'>Welcome back, ".$this->Session->read('Auth.User.username')."!</span>  ";
	
	if($adminUser)
	{
	echo $this->Html->link('Manage Users', array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-success'));
	}
	
	echo "<span> </span>".$this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), array('class' => 'btn btn-default')); 

?>
</div>
<?php endif; ?>
            </div>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<hr />
		<div id="footer">
			<footer>
                <p>&copy; Django 2014</p>
              </footer>
		</div>
	</div>
</body>
</html>
