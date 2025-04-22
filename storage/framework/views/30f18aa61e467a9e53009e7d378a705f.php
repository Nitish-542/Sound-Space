<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1 class="display-2">View All Accessories</h1>
        <div class="col">
            <a href="<?php echo e(route('accessories.create')); ?>" class="btn btn-primary">Add New Accessoty</a>
        </div>
    </div>
</div>
<div class="row">
    <?php $__currentLoopData = $accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($accessory->name); ?></h5>
                    <p class="card-text">Type: <?php echo e($accessory->type); ?></p>
                    <p class="card-text">Price: $<?php echo e($accessory->price); ?></p>
                    <a href="<?php echo e(route('accessories.edit', $accessory->id)); ?>" class="card-link">Edit</a>
                    <a href="<?php echo e(route('accessories.trash', $accessory->id)); ?>" class="card-link">Delete</a>
                    <a href="<?php echo e(route('accessories.show', $accessory->id)); ?>" class="card-link">Details</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Musically\musically\resources\views/accessories/index.blade.php ENDPATH**/ ?>