
<?php $__env->startSection('content'); ?>
    <div class="container py-5 text-center">
        <?php if(isset($teacher)): ?>
          <h1>Editar Profesor</h1>
        <?php else: ?>
          <h1>Crear Profesor</h1>
        <?php endif; ?>

        <?php if(isset($teacher)): ?>
        <form action="<?php echo e(route('teacher.update', $teacher)); ?>" method="POST">
            <?php echo method_field('PUT'); ?>
        <?php else: ?>
        <form action="<?php echo e(route('teacher.store')); ?>" method="POST">
        <?php endif; ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="fullName" class="form-lable">Nombre</label>
            <input type="text" name="fullName" class="form-control" placeholder="Nombre" value="<?php echo e(old('fullName') ??@$teacher->fullName); ?>">
            <p class="form-text">Escriba el nombre del profesor</p>
            <?php $__errorArgs = ['fullName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-text text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-lable">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e(old('email') ??@$teacher->email); ?>">
            <p class="form-text">Escriba el email del profesor</p>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-text text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-lable">Telefono</label>
            <input type="number" name="phone" class="form-control" placeholder="Telefono" value="<?php echo e(old('phone') ??@$teacher->phone); ?>">
            <p class="form-text">Escriba el telefono del profesor</p>
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-text text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="departament" class="form-lable">Departamento</label>
            <input type="text" name="departament" class="form-control" placeholder="Departamento" value="<?php echo e(old('departament') ??@$teacher->departament); ?>">
            <p class="form-text">Escriba el departamento del profesor</p>
            <?php $__errorArgs = ['departament'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="form-text text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <?php if(isset($teacher)): ?>
        <button type="submit" class="btn btn-primary">Edit Teacher</button>
        <?php else: ?>
        <button type="submit" class="btn btn-primary">Save Teacher</button>
        <?php endif; ?>
        
    </form>
    </div
<?php $__env->stopSection(); ?>      
<?php echo $__env->make('theme.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list-crud\resources\views/teacher/form.blade.php ENDPATH**/ ?>