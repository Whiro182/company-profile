<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <strong>Activity Detail</strong><span class="small ms-1"></span>
        <div class="row-reverse float-end">
            <a class="btn btn-info" href="<?php echo e(route('activities.index')); ?>"><< Back</a>
        </div>
    </div>
    <div class="card-body table-responsive">
        <div class="row col-12">
            <?php $__currentLoopData = $act_imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4">
                <img src="<?php echo e(asset("storage/uploads/activity_images/$img->file")); ?>" alt="" class="rounded img-fluid"/>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/current_projects/company-profile/resources/views/admins/activities/show.blade.php ENDPATH**/ ?>