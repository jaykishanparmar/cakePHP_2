 <!-- Registration Section-->
 <section class="page-section" id="registration">
     <div class="container">
         <!-- Contact Section Heading-->
         <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Registration</h2>
         <!-- Icon Divider-->
         <div class="divider-custom">
             <div class="divider-custom-line"></div>
             <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
             <div class="divider-custom-line"></div>
         </div>
         <div class="row justify-content-center">
             <?php echo $this->Session->flash(); ?>
             <div class="col-lg-8 col-xl-7">
                 <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'register']]); ?>
                 <div class="form-floating mb-3">
                     <?php echo $this->Form->input('first_name', array('class' => 'form-control', 'id' => 'first_name', 'type' => 'text')); ?>
                 </div>
                 <div class="form-floating mb-3">
                     <?php echo $this->Form->input('last_name', array('class' => 'form-control', 'id' => 'last_name', 'type' => 'text')); ?>
                 </div>
                 <div class="form-floating mb-3">
                     <?php echo $this->Form->input('number', array('class' => 'form-control', 'id' => 'number', 'label' => 'Contact Number', 'type' => 'text')); ?>
                 </div>
                 <div class="form-floating mb-3">
                     <?php echo $this->Form->input('email', array('class' => 'form-control', 'id' => 'email', 'label' => 'Email', 'type' => 'text')); ?>
                 </div>
                 <div class="form-floating mb-3">
                     <?php echo $this->Form->input('password', array('class' => 'form-control', 'id' => 'password', 'label' => 'Password', 'type' => 'password')); ?>
                 </div>
                 <div class="form-floating mb-3">
                     <?php echo $this->Form->input('confirm_password', array('class' => 'form-control', 'id' => 'confirm_password', 'label' => 'Confirm Password', 'type' => 'password')); ?>
                 </div>
                 <div class="form-floating mb-3">
                     <?php echo $this->Form->input('address', array('class' => 'form-control', 'id' => 'address', 'type' => 'textarea')); ?>
                 </div>
                 <div class="form-floating mb-3">
                     <?php echo $this->Form->input('state', array('class' => 'form-control', 'id' => 'state', 'type' => 'select')); ?>
                 </div>

                 <?= $this->Form->button(__('Sign Up', array('class' => 'btn btn-primary btn-xl disabled', 'id' => 'submitButton', 'type' => 'button'))); ?>


                 <?= $this->Form->end(); ?>
             </div>
         </div>
     </div>
 </section>
 </script>