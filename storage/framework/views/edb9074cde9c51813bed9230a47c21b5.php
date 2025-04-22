<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col">
        <h1 class="display-2">View All Instruments</h1>
        <div class="col">
            <a href="<?php echo e(route('instruments.create')); ?>" class="btn btn-primary">Add New Instrument</a>
        </div>
    </div>
</div>
<div class="row">
    <?php $__currentLoopData = $instruments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instrument): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($instrument->name); ?></h5>
                <p class="card-text">Type: <?php echo e($instrument->type); ?></p>
                <p class="card-text">Price: $<?php echo e($instrument->price); ?></p>
                <a href="<?php echo e(route('instruments.edit', $instrument->id)); ?>" class="card-link">Edit</a>
                <a href="<?php echo e(route('instruments.trash', $instrument->id)); ?>" class="card-link">Delete</a>
                <a href="<?php echo e(route('instruments.show', $instrument->id)); ?>" class="card-link">Details</a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Musically\musically\resources\views/instruments/index.blade.php ENDPATH**/ ?>