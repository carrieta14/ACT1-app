
<?php $__env->startSection('content'); ?>
    <div class="container py-5 text-center">
        <h1>Estudents List</h1>
        <a href="<?php echo e(route('estudent.create')); ?>" class="btn btn-dark">Create Estudent</a>
        
        <?php if(Session::has('Mensaje')): ?>
            <div class="alert alert-info my-5">
                <?php echo e(Session::get('Mensaje')); ?>

            </div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Email</th>
                <th>Semestre</th>
                <th>Carrera</th>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $estudent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>
                  <th><?php echo e($detail->id); ?></th>
                  <th><?php echo e($detail->fullName); ?></th>
                  <th><?php echo e($detail->email); ?></th>
                  <th><?php echo e($detail->semester); ?></th>
                  <th><?php echo e($detail->career); ?></th>
                  <th> <a href="<?php echo e(route('estudent.edit', $detail)); ?>" class="btn btn-warning">Edit</a>

                  <form action="<?php echo e(route('estudent.destroy', $detail)); ?>" method="POST" class="d-inline">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro que quieres eliminar este registro?')">Delete</button>
                  </form>
                  </th>
                </tr>    
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <?php endif; ?>
        </table>    
        <?php if($estudent->count()): ?>
        <?php echo e($estudent->links()); ?>;
        <?php endif; ?>
    </div
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('theme.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list-crud\resources\views/estudent/index.blade.php ENDPATH**/ ?>