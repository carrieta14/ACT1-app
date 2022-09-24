
<?php $__env->startSection('content'); ?>
    <div class="container py-5 text-center">
        <h1>List</h1>
        
        <?php if(Session::has('Mensaje')): ?>
            <div class="alert alert-info my-5">
                <?php echo e(Session::get('Mensaje')); ?>

            </div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <th>Estudiante</th>
                <th>Curso</th>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $estudents->course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $register): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>
                  <th><?php echo e($register->name); ?></th>
                  
                  <th> <a href="<?php echo e(route('attend.edit', $attend)); ?>" class="btn btn-warning">Edit</a>
                
                  <form action="<?php echo e(route('attend.destroy', $attend)); ?>" method="POST" class="d-inline">
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
        <?php if($attends->count()): ?>
        <?php echo e($attends->links()); ?>;
        <?php endif; ?>
    </div
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('theme.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list-crud\resources\views/attend/index.blade.php ENDPATH**/ ?>