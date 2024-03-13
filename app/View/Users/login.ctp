   	<!-- Masthead-->
   	<header class="masthead bg-primary text-white text-center">
   	    <div class="container d-flex align-items-center flex-column">

   	        <!-- <img class="masthead-avatar mb-5" src="/assets/img/avataaars.svg" alt="..." /> -->
   	        <?php echo $this->Html->image('/assets/img/avataaars.svg', array('class' => 'masthead-avatar mb-5')); ?>

   	        <h1 class="masthead-heading text-uppercase mb-0">Login</h1>
   	    </div>
   	</header>
   	<!-- Login Section-->
   	<section class="page-section bg-primary" id="login">
   	    <div class="container">

   	        <div class="row">
   	            <?php echo $this->Form->create('User'); ?>
   	            <div class="form-floating mb-3">
   	                <?php echo $this->Form->input('email', array('class' => 'form-control', 'type' => 'text')); ?>
   	            </div>
   	            <div class="form-floating mb-3">
   	                <?php echo $this->Form->input('password', array('class' => 'form-control', 'type' => 'password')); ?>
   	            </div>
   	            <?php echo $this->Form->end(__('Login')); ?>
   	        </div>

   	    </div>
   	</section>