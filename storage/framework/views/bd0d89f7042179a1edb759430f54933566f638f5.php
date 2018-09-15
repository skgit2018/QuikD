<?php if(session('error_message')): ?>
<div class="alert alert-danger fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo e(session('error_message')); ?>

</div>

<?php endif; ?>

<?php if(session('nouser_message')): ?>
<div class="alert alert-danger fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo e(session('nouser_message')); ?>

</div>

<?php endif; ?>


<?php if(session('success_message')): ?>
<div class="alert alert-success fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo e(session('success_message')); ?>

</div>

<?php endif; ?>
<?php if(session('account_Activate_message')): ?>
<div class="alert alert-success fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo e(session('account_Activate_message')); ?>

</div>

<?php endif; ?>

<?php if(session('otp_message')): ?>
<div class="alert alert-success fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo e(session('otp_message')); ?>

</div>

<?php endif; ?>

<?php if(session('otp_error')): ?>
<div class="alert alert-danger fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo e(session('otp_error')); ?>

</div>

<?php endif; ?>


<?php if(session('login_error')): ?>
<div class="alert alert-danger fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo e(session('login_error')); ?>

</div>

<?php endif; ?>