<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription 
		?>:
		<?php //echo $this->fetch('title'); 
		?>
	</title>
	<?php
	echo $this->Html->meta('icon');
	//echo $this->Html->css('cake.generic');
	echo $this->fetch('meta');
	//echo $this->fetch('css');
	//echo $this->fetch('script');
	?>
	<title>Test - CakePHP 2.x</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

	<!-- <link href="css/styles.css" rel="stylesheet" /> -->
	<?php echo $this->Html->css('styles.css'); ?>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	</script>
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="#page-top">CakePHP - Test</a>
			<button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
					<?php if ($this->Session->read('Auth.User')) : ?>

						<li class="nav-item mx-0 mx-lg-1">
							<?php echo $this->Html->link('Logout', '/users/logout', array('class' => 'nav-link py-3 px-0 px-lg-3 rounded')); ?>
						</li>
					<?php else : ?>
						<li class="nav-item mx-0 mx-lg-1">
							<?php echo $this->Html->link('Login', '/users/login', array('class' => 'nav-link py-3 px-0 px-lg-3 rounded'));
							?>
						</li>
						<li class="nav-item mx-0 mx-lg-1">
							<?php echo $this->Html->link('Register', '/users/register', array('class' => 'nav-link py-3 px-0 px-lg-3 rounded')); ?>
						</li>
					<?php endif; ?>

				</ul>
			</div>
		</div>
	</nav>


	<?php echo 'teststetests' . $this->Flash->render(); ?>

	<?php echo $this->fetch('content'); ?>
	<footer class="footer text-center">
		<div class="container">
			<div class="row">
				<!-- Footer Location-->
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Location</h4>
					<p class="lead mb-0">
						Location Name
					</p>
				</div>
				<div class="col-lg-4">
					<h4 class="text-uppercase mb-4">CakePHP <?php echo $cakeVersion; ?></h4>
				</div>
				<div class="col-lg-4">
					<?php if ($this->Session->read('Auth.User')) :
						echo $this->Html->link('Logout', '/users/logout', array('class' => 'nav-link py-3 px-0 px-lg-3 rounded'));
					else :
						echo $this->Html->link('Login', '/users/login', array('class' => 'nav-link py-3 px-0 px-lg-3 rounded'));
						echo $this->Html->link('Register', '/users/register', array('class' => 'nav-link py-3 px-0 px-lg-3 rounded'));
					endif; ?>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bootstrap core JS-->
	<?php
	echo $this->Html->script('bootstrap.bundle.min.js');
	?>
	<!-- Core theme JS-->
	<?php echo $this->Html->script('scripts.js'); ?>

	<?php echo $this->Html->script('sb-forms-latest.js'); ?>
	<?php //echo $this->element('sql_dump');
	?>
</body>

</html>