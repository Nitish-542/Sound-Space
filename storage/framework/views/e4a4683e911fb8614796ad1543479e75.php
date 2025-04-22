<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1 class="display-2">Available Instruments</h1>
    </div>
</div>
<div class="row instruments">
    <?php $__currentLoopData = $instruments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instrument): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($instrument->name); ?></h5>
                    <p class="card-text"><strong>Type:</strong> <?php echo e($instrument->type); ?></p>
                    <p class="card-text"><strong>Price:</strong> $<?php echo e($instrument->price); ?></p>
                    <h6><strong>Accessories:</h6>
                    <ul>
                        <?php $__currentLoopData = $instrument->accessories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accessory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($accessory->name); ?> (<?php echo e($accessory->type); ?>) - $<?php echo e($accessory->price); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </strong>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Musically\musically\resources\views/user/instruments/index.blade.php ENDPATH**/ ?>