
<?php $__env->startSection('content'); ?>
    <div class="container py-5 text-center">
        <?php if(isset($estudent)): ?>
          <h1>Editar Estudiante</h1>
        <?php else: ?>
          <h1>Crear Estudiante</h1>
        <?php endif; ?>

        <?php if(isset($estudent)): ?>
        <form action="<?php echo e(route('estudent.update', $estudent)); ?>" method="POST">
            <?php echo method_field('PUT'); ?>
        <?php else: ?>
        <form action="<?php echo e(route('estudent.store')); ?>" method="POST">
        <?php endif; ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="fullName" class="form-lable">Nombre Completo</label>
            <input type="text" name="fullName" class="form-control" placeholder="Nombre Completo" value="<?php echo e(old('fullName') ??@$estudent->fullName); ?>">
            <p class="form-text">Escriba el nombre completo del estudiante</p>
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
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e(old('email') ??@$estudent->email); ?>">
            <p class="form-text">Escriba el email del estudiante</p>
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
            <label for="semester" class="form-lable">Semestre</label>
            <input type="text" name="semester" class="form-control" placeholder="Semestre" value="<?php echo e(old('semester') ??@$estudent->semester); ?>">
            <p class="form-text">Escriba el semestre del estudiante</p>
            <?php $__errorArgs = ['semester'];
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
            <label for="career" class="form-lable">Carrera</label>
            <input type="text" name="career" class="form-control" placeholder="Carrera" value="<?php echo e(old('career') ??@$estudent->career); ?>">
            <p class="form-text">Escriba la carrera del estudiante</p>
            <?php $__errorArgs = ['career'];
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
        <?php if(isset($estudent)): ?>
        <button type="submit" class="btn btn-primary">Edit Student</button>
        <?php else: ?>
        <button type="submit" class="btn btn-primary">Save Student</button>
        <?php endif; ?>
        
    </form>
    </div
<?php $__env->stopSection(); ?>      
<?php echo $__env->make('theme.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list-crud\resources\views/estudent/form.blade.php ENDPATH**/ ?>