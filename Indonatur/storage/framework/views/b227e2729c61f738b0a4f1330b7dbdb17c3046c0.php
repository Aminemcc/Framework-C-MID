
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Money Donation Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('money')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <input type="hidden" name="user_id" id="user_id" class="form-control" value="1"></br>
        <label>Bank Type</label></br>
        <input type="text" name="bank" id="bank" class="form-control"></br>
        <label>How much ? </label></br>
        <input type="text" name="quantity" id="quantity" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('money.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\laravel\Indonatur\resources\views/money/create.blade.php ENDPATH**/ ?>