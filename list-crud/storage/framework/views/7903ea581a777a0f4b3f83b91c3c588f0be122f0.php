
<?php $__env->startSection('content'); ?>
    <div class="container py-5 text-center">
        <?php if(isset($attend)): ?>
          <h1>Editar Clase</h1>
        <?php else: ?>
          <h1>Inscribir Curso</h1>
        <?php endif; ?>

        <?php if(isset($attend)): ?>
        <form action="<?php echo e(route('attend.update', $course)); ?>" method="POST">
            <?php echo method_field('PUT'); ?>
        <?php else: ?>
        <form action="<?php echo e(route('attend.store')); ?>" method="POST">
        <?php endif; ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="estudent_id" class="form-lable">Estudiante</label>
            <select name="estudent_id" id="inputTeacher" placeholder="-->Elegir Profesor <--">
                <?php $__currentLoopData = $estudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($estudent->id); ?>"><?php echo e($estudent['fullName']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
            <p class="form-text">Seleccionar estudiante</p>
            <?php $__errorArgs = ['estudent_id'];
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
            <label for="course_id" class="form-lable">Curso</label>
            <select name="course_id" id="inputCourse">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($course->id); ?>"><?php echo e($course['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
            <p class="form-text">Elija el curso</p>
            <?php $__errorArgs = ['course_id'];
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
        <?php if(isset($attend)): ?>
        <button type="submit" class="btn btn-primary">Edit Inscription</button>
        <?php else: ?>
        <button type="submit" class="btn btn-primary">Save Class</button>
        <?php endif; ?>
        
    </form>
    </div
<?php $__env->stopSection(); ?>      
<?php echo $__env->make('theme.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\list-crud\resources\views/attend/form.blade.php ENDPATH**/ ?>