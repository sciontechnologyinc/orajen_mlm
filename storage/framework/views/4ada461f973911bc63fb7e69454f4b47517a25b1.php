<?php $__env->startSection('content'); ?>
<div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Welcome to ORAJEN ECOMMERCE!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
      </header>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ecommerce.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>