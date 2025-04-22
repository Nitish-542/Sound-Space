<?php $__env->startSection('content'); ?>
<div>
    <h1 class="display-2">Available Accessories</h1>
</div>
<div class="container accessories">
    <div class="row">
        <?php $__currentLoopData = $accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($accessory->name); ?></h5>
                        <p class="card-text">Type: <?php echo e($accessory->type); ?></p>
                        <p class="card-text">Price: $<?php echo e($accessory->price); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Musically\musically\resources\views/user/accessories/index.blade.php ENDPATH**/ ?>